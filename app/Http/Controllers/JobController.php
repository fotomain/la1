<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $title = 'Available Jobs33';
        $jobs = ['Web Developer', 'Graphic Designer', 'Graphic Designer'];
        return view('jobs.index')->with('title',$title)->with('jobs',$jobs);
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(string $id){
        return "id = ".$id;
//        return view('jobs.show');
    }

}
