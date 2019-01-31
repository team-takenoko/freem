<?php

use Illuminate\Http\Request;

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

Route::get('/', 'index@index');

Route::get('/upload', 'UploadController@index')->name('upload');

Route::post('/upload', 'UploadController@upload')->name('upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/watch/{movie}', 'WatchController@index');

Route::get('result/{search_ward?}', 'ResultController@index')->name('result');