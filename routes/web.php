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

Route::get('/sign-in', 'UserController@index');
Route::get('/', 'UserController@home');
Route::get('/master/user', 'UserController@list');
Route::get('/master/user/create', 'UserController@create');
Route::get('/master/user/{id}', 'UserController@show');
Route::get('/master/user/{id}/edit', 'UserController@edit');
Route::get('/transaksi/proses-bunga-simpanan', 'BungaSimpananController@create_generate');
Route::get('/report/nasabah', 'ReportController@nasabah');
Route::get('/report/harian', 'ReportController@harian');
Route::get('/report/mingguan', 'ReportController@mingguan');
Route::get('/report/bulanan', 'ReportController@bulanan');
Route::get('/report/tahunan', 'ReportController@tahunan');

Route::post('/sign-in', 'UserController@login');
Route::post('/master/user', 'UserController@register');
Route::post('/sign-out', 'UserController@destroy');
Route::post('/transaksi/proses-bunga-simpanan', 'BungaSimpananController@generate');
Route::post('/report/nasabah', 'ReportController@report_nasabah');

Route::delete('/master/user/{id}', 'UserController@delete');

Route::put('/master/user/{id}', 'UserController@update');

Route::resource('/master/anggota', 'AnggotaController');
Route::resource('/transaksi/simpanan', 'SimpananController');
Route::resource('/master/bunga-simpanan', 'BungaSimpananController');