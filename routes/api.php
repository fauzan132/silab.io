<?php

use Illuminate\Http\Request;

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
//REGISTER & LOGIN API
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');


//TRANSAKSI API
Route::post('pengujian/simpan/', 'API\TransaksiController@store');
Route::get('pengujian/detail/{id}', 'API\TransaksiController@show');
Route::post('pengujian/buktibayar/{id}', 'API\TransaksiController@addBuktiBayar')->name('pengujian.buktibayar');
Route::post('pengujian/hasilpengujian/{id}', 'API\TransaksiController@hasilPengujian');
Route::post('pengujian/verifikasiBayar/{id}', 'API\TransaksiController@verifikasiBayar');
Route::post('pengujian/verifikasiBarang/{id}', 'API\TransaksiController@verifikasiBarang');
// Route::get('pengujian/lihat/', 'API\TransaksiController@index');
Route::get('pengujian/lihat/{id}', 'API\TransaksiController@selectByPerusahaan');
Route::post('pengujian/hapus/{id}', 'API\TransaksiController@destroy');
//GET DATA
Route::get('barang/lihat/', 'API\GetDataController@getBarang');
Route::get('perusahaan/lihat/', 'API\GetDataController@getPerusahaan');
Route::get('petugas/lihat/', 'API\GetDataController@getPetugas');
Route::get('lab/lihat/', 'API\GetDataController@getLab');
Route::get('user/lihat/', 'API\GetDataController@getUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', 'API\UserController@details');
});

//Get hasil uji
Route::get('/hasilujilab/download/{id}','API\TransaksiController@getHasilUji')->name('pengujian.hasiluji');