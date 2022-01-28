<?php
use App\User;
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
Route::get('/logout' , 'LogoutController@logout');
Route::get('/get' ,'LogoutController@check' );
// Route::group(['middleware' => ['checklogin']],function(){
//     Route::resource('/login' ,'LoginController');
//     Route::resource('/register' ,'RegisterController');
// });
Route::resource('/login' ,'LoginController');
Route::resource('/register' ,'RegisterController');


Route::group(['middleware' => ['authweb']],function(){
    Route::resource('/home' , 'HomeController');
    Route::resource('/berita' , 'BeritaController');
    Route::resource('/ayat' , 'AyatController');
    Route::resource('/profile' , 'ProfileController');
});

route::get('/count' ,  function(){
    //$count = User::whereRaw('LENGTH(kartu) >= 7')->count();
    $countuser = User::count();
    $count = User::where('kartu' , '!=' , null)->count();
    $countnull = User::where('kartu' ,  null)->count();
    var_dump($countuser);
    var_dump($count);
    var_dump($countnull);

});


route::get('/uploadkartu','SuperAdminController@uploadkartu');

route::post('/uploadkartuprocess','SuperAdminController@uploadkartuprocess');

route::get('/deleteuser' , function(){
    User::where('id' , '>=' , 453)->delete();
});

Route::group(['middleware' => 'role'],function(){
    //home
    Route::get('/adminhome' , 'SuperAdminController@index');
    Route::get('/allabsen' , 'SuperAdminController@getAllAbsen');
    //absen
    Route::get('/ibadah' , 'SuperAdminController@ibadah');
    // Route::post('/buatibadah' , 'SuperAdminController@buatIbadah');
    // Route::get('/absen' , 'SuperAdminController@absen');
    Route::post('/absenprocess' , 'SuperAdminController@absenProcess');
    Route::get('/getabsen' , 'SuperAdminController@getAbsen');
    Route::get('/absen/{ibadah}/{tanggal}','SuperAdminController@absenDetail');
    Route::get('/tarikdata' , 'SuperAdminController@tarikDataPage');
    Route::post('/tarikdataprocess' , 'SuperAdminController@tarikDataProcess');
    Route::get('/selesai/{jenis}/{tanggal}' , 'SuperAdminController@selesaiProcess');
    //jemaat
    Route::get('/listjemaat' , 'SuperAdminController@listjemaat');
    Route::get('/showjemaat/{id}' , 'SuperAdminController@showjemaat' );
    Route::post('/update/jemaat' , 'SuperAdminController@updatejemaat');
    Route::post('/searchjemaat' , 'SuperAdminController@searchJemaat');
    Route::get('/jemaatbaru' , 'SuperAdminController@jemaatbaru');
    Route::post('/savejemaatbaru' , 'SuperAdminController@savejemaatbaru');


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