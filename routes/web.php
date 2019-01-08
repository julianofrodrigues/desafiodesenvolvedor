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
Route::get('/client','ClienteController@index')->name('client.index');
Route::get('/client/create','ClienteController@create');
route::post('/client/create', 'ClienteController@store')->name('client.store');
Route::get('/client/destroy/{id}','ClienteController@destroy');
route::get('/client/edit/{id}', 'ClienteController@edit')->name('client.edit');
route::post('/client/edit/{id}', 'ClienteController@update')->name('client.update');

