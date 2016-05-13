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




     function edit( $id ) {

        $courseCategories = CourseCategory::all();
        $c = Course::find( $id );
        return view('course.edit', [
            'course' => $c, 
            'courseCategories' => $courseCategories 
            ]);
    }

    function update( Request $request, $id ) {

        $course = Course::find( $id );
        $course->update($request->all());

       return redirect()->route('courseList');
    }


}
