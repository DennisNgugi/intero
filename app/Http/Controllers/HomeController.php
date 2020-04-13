<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
      $department = Department::all();
      return view('welcome',compact('department'));
    }
}
