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
Route::resource('/loginadmin' , 'AdminLoginController');
Route::resource('/registeradmin' , 'AdminRegisterController');
Route::resource('/login' ,'LoginController');
Route::resource('/register' ,'RegisterController');


Route::group(['middleware' => ['authweb','auth']],function(){
    Route::resource('/home' , 'HomeController');
    Route::resource('/berita' , 'BeritaController');
    Route::resource('/ayat' , 'AyatController');
    Route::resource('/profile' , 'ProfileController');
});

Route::group(['middleware' => 'role'],function(){
    //home
    Route::get('/super' , 'SuperAdminController@index');
    
    //absen
    Route::get('/ibadah' , 'SuperAdminController@ibadah');
    // Route::post('/buatibadah' , 'SuperAdminController@buatIbadah');
    // Route::get('/absen' , 'SuperAdminController@absen');
    Route::post('/absenprocess' , 'SuperAdminController@absenProcess');
    Route::get('/getabsen' , 'SuperAdminController@getAbsen');

    //jemaat
    Route::get('/listjemaat' , 'SuperAdminController@listjemaat');
    Route::get('/showjemaat/{id}' , 'SuperAdminController@showjemaat' );
    Route::post('/update/jemaat' , 'SuperAdminController@updatejemaat');

    //berita
    Route::get('/berita' , 'SuperAdminController@berita');
    Route::get('/createberita' , 'SuperAdminController@createBerita');
    Route::post('/createberitaprocess' , 'SuperAdminController@createBeritaProcess');
    Route::get('/updateberita/{id}' , 'SuperAdminController@updateBerita');
    Route::post('/updateberitaprocess' , 'SuperAdminController@updateBeritaProcess');

    

    Route::get('/upload' , 'SuperAdminController@upload');
    Route::post('/uploadprocess' , 'SuperAdminController@uploadprocess');

    
    Route::get('/uploadfoto' , 'SuperAdminController@uploadfoto');
    Route::post('/uploadfotoprocess' , 'SuperAdminController@uploadfotoprocess');


    Route::get('/test' , 'SuperAdminController@test');
    Route::post('/testprocess' , 'SuperAdminController@testprocess');

});
Route::group(['middleware' => 'role'],function(){
    Route::resource('/tulisfirman' , 'AdminAyatController');
});