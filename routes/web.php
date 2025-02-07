<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        "jobs" => [
            [
                'title' => 'Engineer',
                'salary' => '2ll'
            ],
            [
                'title' => 'Frontend Engineer',
                'salary' => '20l'
            ],
            [
                'title' => 'backend Engineer',
                'salary' => '40l'
            ]
        ]
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');  // ✅ Name added

Route::get('/contact', function () {
    return view('contact');
})->name('contact');  // ✅ Name added

