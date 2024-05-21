<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(){

      $projects = Project::all();

      return view('admin.projects', compact('projects'));

    }
}
