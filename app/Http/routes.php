<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','SiteController@index');

Route::get('contact','SiteController@contact');


Route::group(['prefix' => 'admin'], function( ) {


    Route::get('/','AdminController@index');
    Route::get('course/add','CourseController@create');
    Route::get('course', [
    	'as' => 'courseList',
    	'uses' => 'CourseController@index'
    	] );

    Route::post('course',  ['as' => 'postCreateCourse','uses' => 'CourseController@postCreateCourse' ]);
     Route::get('course/{id}/edit',['as' =>'editCourse', 'uses' =>'CourseController@edit']);
     Route::post('course/{id}/save', [
     	'as' => 'postUpdateCourse',
     	'uses' => 'CourseController@update'
     	] );


});

