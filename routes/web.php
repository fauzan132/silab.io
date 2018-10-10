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