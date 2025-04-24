<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/jobs", function () {
    return "Jobs 1";
})->name("jobs"); //for accwss

//Route::match(['get','post'], "/submit", function () {
//    return "Submited 1";
//    //
//});

Route::any("/submit", function () {
    return "Submited 1";
    //
});

Route::get("/test", function () {
    $url = route('jobs');
    return "<a href='{$url}'>Path to {$url}</a>";
});

Route::get("/api/users", function () {

    return [
        'n1'=>'Name1',
        'n2'=>'Name2',
    ];

});

Route::get("/users/{id}", function (string $id) {
    return "User $id";
});

Route::get("/posts/{id}", function (string $id) {
   return "Post $id";
});
//pattern1    ->where('id', '[0-9]+');
//'[a-zA-z]+'

Route::get("/posts/{id}/comments/{commentId}", function (string $id, string $commentId) {
    return "Post $id ".$commentId;
});
