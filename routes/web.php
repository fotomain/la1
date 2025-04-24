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

Route::get("/s-test-params2", function (Request $request) {
    //la1project.test/s-test-params2?name=Max&age=30&sort=desc
    return $request->only(['name','age']);
});

Route::get("/s-test-params3", function (Request $request) {
    //la1project.test/s-test-params3?name=Max&age=30&sort=desc
    return $request->all();
});

Route::get("/s-test-params4", function (Request $request) {
    //la1project.test/s-test-params4?name=Max&age=30&sort=desc
    return $request->has('name');
});

Route::get("/s-test-params5", function (Request $request) {
    //la1project.test/s-test-params5?name=Max&age=30&sort=desc
    return $request->except('name');
});


Route::get("/s-test-params-input", function (Request $request) {
    //la1project.test/s-test-params4?name=Max&age=30&sort=desc
    return $request->input('name','default - undefined');
});

