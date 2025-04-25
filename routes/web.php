<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/jobs", [JobController::class, 'index']);


Route::get("/jobs/create", function () {
    return view('jobs.create');
})->name("jobs.create");


