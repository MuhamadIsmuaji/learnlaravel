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

Route::get('example', function () {
    return 'Example page';
});

Route::get('posts/{id}/{name}', function ($id, $name) {
    return 'The post Id: ' . $id . ' and name: ' . $name;
});

Route::get('posts/todetail', function () {
    return '<a href="' . route('posts.detail') . '">To posts detail</a>';
});

// naming routes
Route::get('posts/detail', function () {
    $now_url = route('posts.detail');
    return 'URL of page: ' . $now_url;
})->name('posts.detail');
