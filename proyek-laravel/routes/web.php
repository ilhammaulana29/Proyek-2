<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('user.index');
});

Route::get('/deskripsi', function(){
    return view('user.deskripsi-produk');
});

Route::get('/profil', function(){
    return view('user.profil-user');
});

Route::get('/pesanan', function(){
    return view('user.pesanan-user');
});
