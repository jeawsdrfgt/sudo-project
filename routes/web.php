<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/subscribe', 'App\Http\Controllers\FansController@index');

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/music', function () {
    return view('music');
});

Route::post('/subscribe', 'App\Http\Controllers\FansController@store');
