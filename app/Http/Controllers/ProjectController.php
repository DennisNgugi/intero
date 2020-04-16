<?php

namespace App\Http\Controllers;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\DepartmentCollection;
use Image;
use DB;
use App\Project;
use App\Department;
use Storage;
use App\ProjectImage;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
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
          'category' => 'required'
        ]);

        $p = new Project;
        $p->project_name = $request->project_name;
        $p->description = $request->description;
        $p->department_id = $request->category;
        $p->slug = str_slug($request->project_name);
        $p->typical_job_cost = $request->cost;
        $p->cost_details = $request->cost_details;

        $p->save();

          // upload images
          if($request->images){
            $images = $request->images;
            // loop through each image
            foreach($images as $img){
              $projectName= $p->project_name;

              //$imagePath = Storage::disk('uploads')->put($projectName . '/posts', $img);

              // crop the images
              //Image::make($img)->resize(750,500)->save($imagePath)->encode();
               $image = Image::make($img)->fit(300);
              $imagePath = Storage::disk('uploads')->put($projectName.'/posts', (string) $image->encode());
              if($imagePath){
                $image = new ProjectImage;
                $image->project_id = $p->id;
                $image->project_image_path = '/uploads/'. $imagePath;
                $image->save();
             }
             else{
               print_r('error');
             }
            }
          }



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
