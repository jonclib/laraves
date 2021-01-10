<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PersonController;

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


// Route::get('/persons','PersonController@index');

// Route::get('/persons', [PersonController::class, 'index']);

Route::get('/persons', 'App\Http\Controllers\PersonController@index');

Route::get('/persons/{id}', 'App\Http\Controllers\PersonController@test');

