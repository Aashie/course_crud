<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{

    function index() {
        return view('front.index');
    }

    function contact(){
        return view('front.contact');
    }


}
