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
Route::get('/form', 'UserController@form');
Route::get('/form/processradio', 'UserController@processradio');
Route::get('/formcheck', 'UserController@formcheck');
Route::post('/formcheck/processcheck', 'UserController@processcheck');
Route::get('/result', 'PageController@result');
Route::get('/time', 'PageController@time');

