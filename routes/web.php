<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'index']);
Route::get("/jobs", [JobController::class, 'index']);
Route::get("/jobs/create", [JobController::class, 'create']);
Route::post("/jobs", [JobController::class, 'store']);

Route::get("/jobs/{id}", [JobController::class, 'show']);





