<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\DepartmentCollection;
use Image;
use DB;
use Response;
use App\User;
use App\Project;
use App\Department;
use Storage;
use App\ProjectImage;
use Auth;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
  // public function __construct()
  //  {
  //      $this->middleware(['auth','verified']);
  //  }
  //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new ProjectCollection(Project::latest()->get());

    }

    public function categories(){
      $dep = Department::all();
      return response([
          'department' => new DepartmentCollection($dep),
      ],
      200
  );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('dashboard.projects.create',compact('department'));
    }

    public function projectsingle(Project $project){

      $project_single = Project::with('projectimages','users')->where('slug',$project['slug'])->get();
      //return Response::json($project_single);
       return view('project.project-single',compact('project_single'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'project_name' => 'required',
          'description' => 'required',
          'category' => 'required',

        ]);
        //  $user_id =  Auth::user()->id;

        $p = new Project;
        $p->project_name = $request->project_name;
        $p->description = $request->description;
        $p->department_id = $request->category;
        $p->slug = str_slug($request->project_name);
        $p->typical_job_cost = $request->cost;
        $p->cost_details = $request->cost_details;
        $p->user_id = Auth::id();




        // upload thumbnail
          if($request->hasFile('thumbnail')){
            $thumb = $request->file('thumbnail');
            $filename = $request->project_name.'-'.time().'-'.$thumb->getClientOriginalExtension();
            $location ='thumbnail/'.$filename;
            Image::make($thumb)->resize(370, 240)->save($location);
            $p->thumbnail = '/'.$location;

          }
              $p->save();





          // upload images
          if($request->images){
            $images = $request->images;
            // loop through each image
            foreach($images as $img){
              $projectName= $p->project_name;
              $filename = $p->id.'-'.$projectName.'-'.time().'-'.$img->getClientOriginalName();
              $location ='uploads/'.$filename;
              Image::make($img)->resize(400, 470)->save($location);
              if($location){
                $image = new ProjectImage;
                $image->project_id = $p->id;
                $image->project_image_path = '/'.$location;
                $image->save();
             }
             else{
               print_r('error.Check if uploads folder is available');
             }

          }

}

  return response()->json(['success' => 'Project added succesfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
