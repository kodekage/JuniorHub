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

Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/404', '404');

Route::resource('blogpost', 'BlogPostsController');

Auth::routes();

// Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');

Route::get('/juniors', 'UsersController@index');
Route::get('/juniors/{user}', 'UsersController@show');
Route::get('/profile', 'UsersController@profile');
Route::get('/profile/{user}', 'UsersController@edit');
Route::put('/profile/{id}', 'UsersController@update');
