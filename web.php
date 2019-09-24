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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('kabupaten','Kabupaten');

Route::get('/', function(){
    return view('index');
});

Route::resource('penjualan','Penjualan');

Route::get('/', function(){
    return view('index');
});

Route::resource('pembelian','Pembelian');

Route::get('/', function(){
    return view('index');
});

Route::resource('barang','Barang');

Route::get('index', 'index@index');


Route::get('login', 'Login@index');
Route::post('/login/cek', 'Login@cek');
Route::get('/logout', 'Login@logout');