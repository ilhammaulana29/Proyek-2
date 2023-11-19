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

Route::get('/alamat', function(){
    return view('user.alamat-user');
});

Route::get('/wishlist', function(){
    return view('user.wishlist');
});

Route::get('/checkout', function(){
    return view('user.checkout-produk');
});

Route::get('/produk-kategori', function(){
    return view('user.produk-kategori');
});

// Route Admin
Route::get('/dashboard-admin', function(){
    return view('admin.index');
});

Route::get('/pesanan-admin', function(){
    return view('admin.pesanan-admin');
});

Route::get('/produk-admin', function(){
    return view('admin.produk-admin');
});

Route::get('/seting-admin', function(){
    return view('admin.seting-admin');
});
