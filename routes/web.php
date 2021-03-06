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

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@index');
Route::resource('/post', 'PostController');

Route::resource('/', 'FrontEndController');
Route::get('/post_details/{id}', 'FrontEndController@post_details');
