<?php

namespace App\Http\Controllers;
use App\Department;
use App\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function homePage(){
      $department = Department::all();
      $project = Project::all();
      return view('welcome',compact('department','project'));
    }


}
