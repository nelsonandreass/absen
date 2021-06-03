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
Route::resource('/home' , 'HomeController');
Route::resource('/berita' , 'BeritaController');
Route::resource('/ayat' , 'AyatController');
Route::resource('/profile' , 'ProfileController');

Route::resource('/login' ,'LoginController');
Route::resource('/register' ,'RegisterController');
