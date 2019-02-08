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


Route::get('users', 'Users@index');
Route::post('users', 'Users@store');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('profile', 'Users@profile')->name('profile');
Route::post('profile/upload', 'Users@avatar')->name('upload.avatar');
