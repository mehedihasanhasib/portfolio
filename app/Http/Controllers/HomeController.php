<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $skills = Skill::all();
        return view('index', compact('projects', 'skills'));
    }
}
