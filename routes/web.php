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

Route::get('productos', 'ProductosController@index');
Route::get('productos/all', 'ProductosController@getData');
Route::get('productos/{id}','ProductosController@show')->where('id', '[0-9]+');