<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	
    return view('login');
});


//routes of log controller
Route::post('/log/login','log@login');
Route::get('/log/logout','log@logout');

//route of user conroller
Route::get('/create','userconroller@create');
Route::post('/create','userconroller@store');

Route::get('/userconroller/edit','userconroller@edit');
Route::post('/userconroller/{id}','userconroller@update');
Route::get('/userconroller/{id}/delete','userconroller@destroy');

// route of course controller
Route::get('/add_course','CourseController@add_course');
Route::post('/add_course','CourseController@store');
Route::get('/CourseController/edit','CourseController@edit');
Route::post('/CourseController/{id}','CourseController@update');
Route::get('/CourseController/{id}/delete','CourseController@destroy');


//route of course_instructor controller

Route::get('/course_instructor/retrive_instuctors_courses','courseinstructor@retrive_instuctors_courses');
Route::post('/course_instructor/assign_course_instructor','courseinstructor@assign_course_instructor');




// route of student controller

Route::get('/student/show_courses','studentcontroller@show_courses');
Route::post('/student/regest_courses','studentcontroller@regist_courses');
Route::get('/student/show_grade','studentcontroller@show_grade');