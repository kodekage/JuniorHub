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

Route::get('/', 'BlogsController@index');
Route::get('/about', 'BlogsController@about');
Route::get('/404', 'BlogsController@error');

Route::resource('blogpost', 'BlogPostsController');

Auth::routes();

Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');
