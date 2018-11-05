<?php

/*
|--------------------------------------------------------------------------
| WebHome Routes
|--------------------------------------------------------------------------
|
| Here is where you can register test routes for your application. 
|
*/

Route::get('/','StaticPagesController@home')->name('home');

Route::get('/help','StaticPagesController@help')->name('help');

Route::get('/about','StaticPagesController@about')->name('about');

Route::get('/login','UsersController@login')->name('login');

Route::get('/register','UsersController@create')->name('register');

Route::resource('users','UsersController');

//login
Route::get('login','SessionsController@login')->name('login');
Route::post('login','SessionsController@store')->name('login');
Route::delete('logout','SessionsController@logout')->name('logout');