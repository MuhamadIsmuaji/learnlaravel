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

// Query builder routes
Route::get('qu', 'QuController@index')->name('qu.index');
Route::get('quretrieve', 'QuController@retrieve')->name('qu.retrieve');
Route::get('qucreate', 'QuController@create')->name('qu.create');
Route::get('quupdate/{id}', 'QuController@update')->name('qu.update');
Route::get('qudelete/{id}', 'QuController@delete')->name('qu.delete');
