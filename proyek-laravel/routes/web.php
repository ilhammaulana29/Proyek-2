<?php

use App\Http\Controllers\produkController;
use App\Http\Controllers\ProdukControllerUser;
use App\Http\Controllers\tokoController;
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

Route::get('/', [ProdukControllerUser::class,'index']);
Route::get('/home', [ProdukControllerUser::class,'index']);

Route::get('/produk/{id}', [ProdukControllerUser::class, 'show'])->name('produk.show');

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

Route::get('/produk-admin',[produkController::class,'index']);
Route::get('/produk-admin/create',[produkController::class,'create']);
Route::post('/produk-admin/store',[produkController::class,'store']);
Route::get('/produk-admin/edit/{id}',[produkController::class,'edit']);
Route::post('/produk-admin/update/{id}',[produkController::class,'update']);
Route::get('/produk-admin/destroy/{id}',[produkController::class,'destroy']);

// Route::post('/toko/update/{id}', [tokoController::class,'update']);
Route::get('seting-toko-admin',[tokoController::class,'index']);
Route::post('seting-toko-admin/update',[tokoController::class,'update']);


