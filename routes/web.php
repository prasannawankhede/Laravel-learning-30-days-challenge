<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');  // ✅ This adds the missing 'home' route name

Route::get('/about', function () {
    return view('about');
})->name('about');  // ✅ Name added

Route::get('/contact', function () {
    return view('contact');
})->name('contact');  // ✅ Name added

