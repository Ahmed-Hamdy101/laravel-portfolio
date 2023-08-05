<?php

namespace App\Http\Controllers\Backend;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    
        public function index(){
    
            $projects = Project::all();
              return view('projects.index',compact('projects'));
        }
    
    
}
