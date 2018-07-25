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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cliente', 'ClienteController@index');
Route::get('/cliente/create', 'ClienteController@create');
Route::post('/cliente/store', 'ClienteController@store');
Route::get('/cliente/{cliente}/edit', 'ClienteController@edit');
Route::post('/cliente/{cliente}/update', 'ClienteController@update');
Route::get('/cliente/{cliente}/destroy', 'ClienteController@destroy');