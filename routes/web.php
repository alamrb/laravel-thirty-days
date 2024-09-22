<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

use App\Models\Job;



Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()

    ]);
});

Route::get('/jobs/{id}', function ($id) {
    // \Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] == $id;
    // });
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);
    if (!$job) {
        abort(404);
    }
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
