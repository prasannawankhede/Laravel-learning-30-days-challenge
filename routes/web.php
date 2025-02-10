<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
})->name('jobs');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
})->name('job.show'); 
