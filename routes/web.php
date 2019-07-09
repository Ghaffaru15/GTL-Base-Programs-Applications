<?php

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
    return view('welcome');
});

// Route::post('/ai/hubs','UserController@store');
 Route::post('/ai/hubs','UserController@store');


Route::get('/cur-devs',function(){
	return view('cur-devs');
});

Route::post('/ai/cur','CurriculumDevsController@store');