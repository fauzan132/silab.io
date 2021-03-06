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

// Auth::routes(['verify' => true]); 

Route::group(['middleware' => 'web'], function(){
    //redirect to login
    // Route::auth();
    Auth::routes(['verify' => true, 'register' => false]);
});
Route::group(['middleware' => ['web','auth']], function(){
    //redirect to login
    Route::get('/home','HomeController@index');
    Route::get('/', function(){
        if(Auth::user()->level==0){
            return view('admin.home');
        }elseif(Auth::user()->level==1){
            return view('petugas.home');
        }elseif(Auth::user()->level==2){
            return view('perusahaan.home');
        }
    });
});



//PETUGAS
Route::resource('petugas','PetugasController');


//PERUSAHAAN
Route::resource('perusahaan','PerusahaanController');


//LAB
Route::resource('lab','LabController');


//PENGUJIAN
Route::resource('pengujian','PengujianController');
Route::get('/detailpengujian','PengujianController@transaksi');
Route::get('/statusadmin/{id}','PengujianController@pengujianadmin')->name('pengujian.formstatusadmin');
Route::get('/liststatusadmin','PengujianController@listpengujianadmin')->name('pengujian.liststatusadmin');
Route::post('/verifikasibayar','PengujianController@verifikasibayar')->name('pengujian.verifikasibayar');
Route::get('/formpengujianlab/{id}','PengujianController@panggilujipetugas')->name("pengujian.formpengujianlab");

Route::post('/verifikasidatang','PengujianController@verifikasibarangdatang')->name('pengujian.verifikasibarangdatang');
Route::get('/logpengujian','PengujianController@logpengujian')->name('pengujian.berhasil');
Route::get('/logpengujian/{id}','PengujianController@logdetailpengujian')->name('pengujian.logdetail');

//DOWNLOAD HASIL PENGUJIAN
Route::get('/hasiluji/download/{id}','PengujianController@hasiluji')->name('pengujian.hasil');
//BARANG
Route::resource('barang','BarangController');

//Route::get('pengujiantes/', 'API\TransaksiController@index');