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
