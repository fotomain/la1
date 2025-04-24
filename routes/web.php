<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/jobs", function () {
    return "Jobs 1";
})->name("jobs"); //for accwss

Route::get("/s-test-request", function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullUrl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'header' => $request->header(),
        'userAgent' => $request->userAgent(),
    ];
});

Route::get("/s-test-params", function (Request $request) {
    //la1project.test/s-test-params?name=Max
    return $request->query('name');
});
