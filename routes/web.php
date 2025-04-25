<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/jobs", function () {
    $title = 'Available Jobs';
    $jobs = ['Web Developer', 'Graphic Designer', 'Graphic Designer'];
    return view('jobs.index')->with('title',$title)->with('jobs',$jobs);
})->name("jobs");


Route::get("/jobs/create", function () {
    return view('jobs.create');
})->name("jobs.create");


