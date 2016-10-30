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

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::resource('/policy','PolicyController', ['only' => ['index','show', 'store']]);

Route::resource('/files', 'FileController');

Route::resource('/taxi','TaxiController', ['only' => ['index', 'show', 'store']]);

Route::resource('/towing', 'TowController' , ['only' => ['index', 'show', 'store']]);

Route::resource('/Vehicles', 'VehicleController', ['only' => 'index']);

Route::resource('/insurance', 'InsuranceController', ['only' => 'show']);