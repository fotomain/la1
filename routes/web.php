<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index']);


Route::get("/jobs/share", [JobController::class, 'share']);

Route::resource("jobs", JobController::class);






