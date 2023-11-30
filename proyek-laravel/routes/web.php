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

Route::get('/seting-profil-admin', function(){
    return view('admin.seting-profil-admin');
});

Route::get('/seting-toko-admin', function(){
    return view('admin.seting-toko-admin');
});
Route::get('/login-user', function(){
    return view('login.login');
});
Route::get('/register-user', function(){
    return view('login.registrasi');
});
Route::get('/tambah-produk', function(){
    return view('admin.tambah-produk');
});
Route::get('/ubah-produk', function(){
    return view('admin.edit-produk');
});


