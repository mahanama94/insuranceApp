<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::resource('/policy','PolicyController');

Route::resource('/files', 'FileController');

Route::resource('/taxi','TaxiController');

Route::resource('/towing', 'TowController');
