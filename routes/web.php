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
    return view('index');
});
Route::get('members-register', 'AuthController@showRegisterForm')->name('members.register');
Route::post('members-register', 'AuthController@register');
Route::get('members-login', 'LogController@showLoginForm')->name('members.login');
Route::post('members-login', 'LogController@login');
Route::get('/members/successlogin', 'LogController@successlogin')->middleware('auth');
Route::get('/members/successlogin', 'MoviesController@index')->middleware('auth');
Route::get('/logout', 'LogController@logout');

Route::get('/members/successlogin/create', 'MoviesController@create')->middleware('auth');
Route::post('/members/successlogin', 'MoviesController@store')->middleware('auth');
Route::get('/members/successlogin/{movie}/edit', 'MoviesController@edit')->middleware('auth');
Route::patch('/members/successlogin/{movie}', 'MoviesController@update')->middleware('auth');
Route::delete('/members/successlogin/{movie}', 'MoviesController@destroy')->middleware('auth');
Route::get('/members/successlogin/{movie}', 'MoviesController@show')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('saveWatch', 'MoviesController@saveWatch');