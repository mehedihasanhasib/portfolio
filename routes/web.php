<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact-form-submit', ContactController::class)->name('contact.form.submit');

// Route::get('/project', function () {
//     $project = new Project();
//     $project->title = 'Job Marketplace Platform';
//     $project->details = 'A web-based job portal where job seekers can browse and apply for jobs, while recruiters can post job listings and manage applications.';
//     $project->tags = ["Laravel", "MySQL", "JavaScript", "AJAX"];
//     $project->github_link = 'https://github.com/mehedihasanhasib/jobentry-laravel';
//     $project->save();

//     return $project;
// });
