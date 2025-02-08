<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => [
            ['id' => 1, 'title' => 'Engineer', 'salary' => '2L'],
            ['id' => 2, 'title' => 'Frontend Engineer', 'salary' => '20L'],
            ['id' => 3, 'title' => 'Backend Engineer', 'salary' => '40L'],
        ]
    ]);
})->name('jobs'); // ✅ Ensure this is present


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});
