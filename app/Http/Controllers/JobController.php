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


}
