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
Route::get('userdelete/{user_id}', 'HomeController@userdelete')->name('userdelete');
Route::get('user/{user_id}/posts', 'HomeController@userposts')->name('userposts');
Route::get('user/{user_id}/create/post', 'HomeController@createpost')->name('createpost');
Route::get('user/{post_id}/update/post', 'HomeController@updatepost')->name('updatepost');
Route::get('user/{post_id}/delete/post', 'HomeController@deletepost')->name('deletepost');
Route::get('user/{user_id}/delete/allpost', 'HomeController@deleteallpost')->name('deleteallpost');
