<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\orderControllerAdmin;
use App\Http\Controllers\produkController;
use App\Http\Controllers\tokoController;
use App\Http\Controllers\userController;
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

Route::get('/', [homeController::class,'index']);
Route::get('/home', [homeController::class,'index']);

Route::get('/produk/{id}', [homeController::class, 'show'])->name('produk.show');

Route::post('/tambah-keranjang/{id}', [keranjangController::class, 'tambahKeranjang']);
Route::get('/hapus-keranjang/{id}', [keranjangController::class, 'hapusKeranjang'])->name('hapus-keranjang');
Route::get('/order/create', [keranjangController::class, 'viewOrder'])->name('view-order');
Route::get('/order/store', [keranjangController::class, 'prosesOrder'])->name('proses-order');

Route::get('/profil', [userController::class, 'profilUser']);

Route::get('/pesanan', [orderController::class, 'index'])->name('pesanan.semua');
Route::get('/pesanan-menunggu-konfirmasi', [orderController::class, 'pesananMenungguKonfirmasi'])->name('pesanan.menunggu-konfirmasi');
Route::get('/pesanan-dikemas', [orderController::class, 'pesananDikemas'])->name('pesanan.dikemas');
Route::get('/pesanan-dikirim', [orderController::class, 'pesananDikirim'])->name('pesanan.dikirim');
Route::get('/pesanan-selesai', [orderController::class, 'pesananSelesai'])->name('pesanan.selesai');
Route::get('/pesanan-dibatalkan', [orderController::class, 'pesananDibatalkan'])->name('pesanan.dibatalkan');
Route::get('/pesanan-dikembalikan', [orderController::class, 'pesananDikembalikan'])->name('pesanan.dikembalikan');

Route::get('/alamat', [userController::class, 'alamatUser']);

Route::get('/wishlist', [userController::class, 'wishlistUser']);


Route::get('/produk-kategori', function(){
    return view('user.produk-kategori');
});


// Route Admin
Route::get('/dashboard-admin', [dashboardController::class, 'index']);
Route::get('/orders', [dashboardController::class, 'dataOrder']);

Route::get('/pesanan-admin', [orderControllerAdmin::class, 'index'])->name('pesananAdmin.semua');
Route::get('/pesanan-admin-baru', [orderControllerAdmin::class, 'pesananBaru'])->name('pesananAdmin.baru');
Route::get('/pesanan-admin-dikemas', [orderControllerAdmin::class, 'pesananDikemas'])->name('pesananAdmin.dikemas');
Route::get('/pesanan-admin-siap-diambil', [orderControllerAdmin::class, 'pesananSiapDiAmbil'])->name('pesananAdmin.siap-diambil');
Route::get('/pesanan-admin-selesai', [orderControllerAdmin::class, 'pesananSelesai'])->name('pesananAdmin.selesai');
Route::get('/pesanan-admin-dibatalkan', [orderControllerAdmin::class, 'pesananDibatalkan'])->name('pesananAdmin.dibatalkan');
Route::get('/pesanan-admin-dikembalikan', [orderControllerAdmin::class, 'pesananDikembalikan'])->name('pesananAdmin.dikembalikan');
Route::get('/terima-pesanan/{id}', [orderControllerAdmin::class, 'terimaPesanan'])->name('terima-pesanan');
Route::get('/tolak-pesanan/{id}', [orderControllerAdmin::class, 'tolakPesanan'])->name('tolak-pesanan');



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


// Route seting toko dan profil admin
Route::get('/seting-profil-admin',[adminController::class,'index']);
Route::post('/seting-profil-admin/update',[adminController::class,'update']);

// Route::post('/toko/update/{id}', [tokoController::class,'update']);
Route::get('seting-toko-admin',[tokoController::class,'index']);
Route::post('seting-toko-admin/update',[tokoController::class,'update']);


