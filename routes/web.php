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

Route::get('/', "HomeController@index" );

Route::get('/User', "UserController@index");

Route::get('/User/contact', "UserController@create");

Route::get('/user/store', "UserController@store");

Route::get('/user/edit/{id}', "HomeController@edit");

Route::get('/user/update/{id}', "UserController@update");

Route::get('/user/delete/{Age}', "UserController@delete");
