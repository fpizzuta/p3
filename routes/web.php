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

Route::get('/', 'AuthenticateController@login');
Route::get('/games', 'GameController@index');
Route::post('/games', 'GameController@store');
Route::get('/games/{title}', 'GameController@show');
Route::get('/newgame', 'GameController@create');
Route::get('/user/{name}', 'UserController@show');
Route::get('/users', 'UserController@index');



