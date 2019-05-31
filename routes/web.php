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
Route::get('/login','AyarController@giris');


Route::group(['prefix'=>'yonetim'],function (){
    Route::get('/','YonetimController@index')->name('yonetim.index');
    Route::resource('ayarlar','AyarController');
    Route::post('ayarlar/{id}','AyarController@update')->name('yonetim.ayarlar');
    Route::resource('kategoriler','KategoriController');
//    Route::post('kategoriler','KategoriController@store')->name('yonetim.kategoriler');
});