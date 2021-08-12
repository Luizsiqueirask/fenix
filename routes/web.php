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

Route::group(['namespace' => 'web'], function(){
    Route::get('/',                     'WebController@Index')->name('index');
    Route::get('/about',                'WebController@About')->name('about');
    Route::get('/service',              'WebController@Service')->name('service');
    Route::get('/department',           'WebController@Department')->name('department');
    Route::get('/doctor',               'WebController@Doctor')->name('doctor');
    Route::get('/appoinment',           'WebController@Appoinment')->name('appoinment');
    Route::get('/exams',                'WebController@Blog')->name('exams');
    Route::get('/contact',              'WebController@Contact')->name('contact');
});

Route::group(['namespace' => 'panel'], function(){
    Route::get('/panel',                'PanelController@Index')->name('panel');
    Route::get('/dashboard',            'PanelController@Dashboard')->name('dashboard');
});


/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
