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
Route::get('pengujian/lihat/', 'API\TransaksiController@index');
Route::post('pengujian/hapus/{id}', 'API\TransaksiController@destroy');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', 'API\UserController@details');
});