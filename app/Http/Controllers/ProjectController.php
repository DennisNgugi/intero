<?php

namespace App\Http\Controllers;

use App\Project;
use App\Department;

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
        $project = Project::all();

    }

    public function categories(){
      $dep = Department::all();
      return response()->json([
           "department" => $dep
        ],200);
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
          'department' => 'required'
        ]);

        $p = new Project;
        $p->project_name = $request->project_name;
        $p->description = $request->description;
        $p->slug = str_slug($request->project_name);
        $p->typical_job_cost = $request->typical_job_cost;
        $p->cost_details = $request->cost_details;

        $p->save();

        $image = new ProjectImage;
        $image->project_id = $p->id;
        $image->images;

        session()->flash('success','Project created succesfully');
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
