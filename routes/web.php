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

Route::get('/home', function () {
    return view('page.home');
});

Route::get('/second', function () {
    return view('page.second');
});
Route::get('/third', function () {
    return view('page.third');
});
Route::get('/buttons', function () {
    return view('components.buttons');
});
Route::get('/first', function () {
    return view('components.first');
});

