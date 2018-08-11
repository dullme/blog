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

Route::get('post', function () {
    return view('post');
});

Route::get('post2', function () {
    return view('post2');
});

Route::get('post3', function () {
    return view('post3');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/1', 'PostController@show');