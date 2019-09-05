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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nim', 'NimController@index')->name('nim');
Route::get('/pilihkahim', 'PilihKahimController@index')->name('pilihkahim');
Route::post('/pilihkahim', 'PilihKahimController@index')->name('pilihkahim');
Route::get('/cakahim', 'CakahimController@index')->name('cakahim');
Route::get('/daftarpemilih', 'DaftarPemilihController@index')->name('daftarpemilih');
Route::get('/inputpemilih', 'DaftarPemilihController@input')->name('inputpemilih');

