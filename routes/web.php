<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/jobs", function () {
    return "Jobs 1";
})->name("jobs"); //for accwss

Route::get("/test1", function () {
    return response("Jobs 2",200);
});

Route::get("/test2", function () {
    return response("Page not found",404);
});

Route::get("/test3", function () {
    return response('<h1>Hello!</h1>',200)->header('Content-Type', 'text/html');
});

Route::get("/test4", function () {
    return response()->json(['name' => 'John Doe']);
});

Route::get("/test5", function () {
    return response()->download(public_path('favicon.ico'));
});

Route::get("/test6", function () {
    return response()->json(['name' => 'John Doe'])->cookie('name', 'John Doe');
});

Route::get("/test7", function (Request $request) {
     $val = $request->cookie('name');
     return response()->json(['$val' => $val]);
});

