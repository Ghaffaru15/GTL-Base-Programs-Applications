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

Route::post('/ai/hubs','UserController@store');

Route::post('/stakeholder-meeting','StakeholderMeetingController@store');
Route::get('/stakeholder-meeting', function(){
    return view('stakeholder-meeting');
});
// Route::get('/cur-devs',function(){
// 	return view('cur-devs');
// });

Route::post('/ai/cur','CurriculumDevsController@store');

Route::post('/national-pitch','NationalPitchController@store');

Route::get('/national-pitch',function(){
    return view('national-pitch');
});

Route::get('/ai/national-pitch', function() {
    return view('ai-national-pitch');
});
Route::post('/ai/national-pitch','NationalPitchController@ai');