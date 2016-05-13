<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

use App\Http\Requests;

class ForceController extends Controller
{
    

    function index() {

        $courses = Course::all();
        return view('course.index', ['courses' => $courses ]);
    }

}
