<?php

use Illuminate\Http\Request;
use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/users', function(){
    return User::get();
});
Route::post('/users' , function(){
    $data = array(
        'name' => "testing",
        'email' => "testing@gmail.com",
        'password' => "password"
    );
    User::create($data);
});
Route::get('/users/{id}' , function($id){
    return User::find($id);
});