<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your api!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'api'], function(){
    Route::resource('exam',             'ExamController');
    Route::resource('card',             'ElectronicController');
    Route::resource('localization',     'LocalizationController');
    Route::resource('reader',           'ReaderController');
    Route::resource('collection',       'CollectionController');
    Route::resource('vaccination',      'VaccinationController');
});
