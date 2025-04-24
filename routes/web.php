<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/jobs", function () {
    return "Jobs 1";
});

//Route::match(['get','post'], "/submit", function () {
//    return "Submited 1";
//    //
//});

Route::any("/submit", function () {
    return "Submited 1";
    //
});
