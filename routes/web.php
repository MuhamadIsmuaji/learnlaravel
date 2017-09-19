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

Route::get('/', 'HomeController@index')->name('home');
Route::get('createuser', 'HomeController@createuser')->name('createuser');
Route::get('deleteuser/{user_id}', 'HomeController@deleteuser')->name('deleteuser');
Route::get('userdetail/{user_id}', 'HomeController@userdetail')->name('userdetail');
Route::get('createaddress/{user_id}', 'HomeController@createaddress')->name('createaddress');
Route::get('deleteaddress/{user_id}', 'HomeController@deleteaddress')->name('deleteaddress');
Route::get('updateaddress/{address_id}', 'HomeController@updateaddress')->name('updateaddress');
