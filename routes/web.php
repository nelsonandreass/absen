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

Route::get('/', 'Controller@index');

Route::group(['middleware' => 'authweb'],function(){
    Route::resource('/home' , 'HomeController');
    Route::resource('/berita' , 'BeritaController');
    Route::resource('/ayat' , 'AyatController');
    Route::resource('/profile' , 'ProfileController');
});

Route::group(['middleware' => 'role'],function(){
    Route::resource('/tulisfirman' , 'AdminAyatController');
});

Route::resource('/loginadmin' , 'AdminLoginController');
Route::resource('/registeradmin' , 'AdminRegisterController');
Route::resource('/login' ,'LoginController');
Route::resource('/register' ,'RegisterController');
