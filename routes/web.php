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

// Eloquent basic routes
Route::get('el', 'ElController@index')->name('el.index');
Route::get('elcreatebasic', 'ElController@createbasic')->name('el.createbasic');
Route::get('elcreatemass', 'ElController@createmass')->name('el.createmass');
Route::get('eldelete/{id}', 'ElController@delete')->name('el.delete');
Route::get('forcedelete/{id}', 'ElController@forcedelete')->name('el.forcedelete');
Route::get('elupdatebasic/{id}', 'ElController@updatebasic')->name('el.updatebasic');
Route::get('elupdatemass/{id}', 'ElController@updatemass')->name('el.updatemass');

// Eloquent relationship routes
Route::get('elrel', 'ElrelController@index')->name('elrel.index');
Route::get('elrel/user/{user_id}/posts', 'ElrelController@userposts')->name('elrel.userposts');
Route::get('elrel/user/{user_id}/roles', 'ElrelController@userroles')->name('elrel.userroles');
Route::get('elrel/post/{post_id}/detail', 'ElrelController@postdetail')->name('elrel.postdetail');
Route::get('elrel/role/{role_id}/detail', 'ElrelController@roledetail')->name('elrel.roledetail');
Route::get('elrel/country/{country_id}/posts', 'ElrelController@countryposts')->name('elrel.countryposts');
