<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
            ['title' => 'Engineer', 'salary' => '2L'],
            ['title' => 'Frontend Engineer', 'salary' => '20L'],
            ['title' => 'Backend Engineer', 'salary' => '40L'],
        ]
    ]);
})->name('jobs'); // ✅ Ensure this is present


Route::get('/contact', function () {
    return view('contact');
})->name('contact');
