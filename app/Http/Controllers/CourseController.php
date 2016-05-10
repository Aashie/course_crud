<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{



    function index() {

        $courses = Course::all();
        return view('course.index', ['courses' => $courses ]);
    }

    function create()
    {

        $courseCategories = CourseCategory::all();
        return view('course.create', ['courseCategories' => $courseCategories]);
    }

    function postCreateCourse( Request $request ) {


        Course::create( $request->all());

        return redirect()->route('courseList');


    }


}
