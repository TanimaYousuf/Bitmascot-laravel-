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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register','RegisterController@showRegisterForm');
Route::post('/register','RegisterController@register');
Route::get('/loginForm','LoginController@showLoginForm');
Route::post('/loginForm','LoginController@login');
Route::get('/logout','LogoutController@logout');
Route::get('/changePassword','ChangePasswordController@showForm');
Route::post('/changePassword','ChangePasswordController@changePassword');
Route::get('/profile','ProfileController@showProfile');
Route::get('/admin','AdminController@admin');
Route::get('/admin','AdminController@action');
Route::get('/admin','AdminController@search');