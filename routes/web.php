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

Route::get('/home', 'DaftarPemilihController@index')->name('home');

Route::get('/pilihkahim', 'PilihKahimController@index')->name('pilihkahim');
Route::post('/auth', 'PilihKahimController@auth')->name('authcounter');
Route::post('/pilihkahim', 'PilihKahimController@index')->name('pilihkahim');
Route::get('/nim', 'PilihKahimController@nim')->name('nim');
Route::get('/counter', 'PilihKahimController@counterauth')->name('counter');

Route::get('/cakahim', 'CakahimController@index')->name('cakahim');
Route::get('/cakahim/create', 'CakahimController@create')->name('inputcakahim');
Route::get('/cakahim/edit', 'CakahimController@edit')->name('editcakahim');
Route::post('/cakahim/update', 'CakahimController@update')->name('updatecakahim');
Route::post('/cakahim', 'CakahimController@store')->name('storecakahim');

Route::get('/pemilih', 'DaftarPemilihController@index')->name('daftarpemilih');
Route::get('/pemilih/create', 'DaftarPemilihController@create')->name('inputpemilih');
Route::get('/pemilih/edit', 'DaftarPemilihController@edit')->name('editpemilih');
Route::post('/pemilih/update', 'DaftarPemilihController@update')->name('updatepemilih');
Route::post('/pemilih', 'DaftarPemilihController@store')->name('storepemilih');


