<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\produk;
use App\Models\toko;
use App\Models\userdami;
use Illuminate\Http\Request;

class kategoriProdukController extends Controller
{
    public function __construct()
    {
        $id_user = userdami::where('id_user', 1)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataToko = toko::all();
        view()->share('dataToko', $dataToko);
        view()->share('dataKeranjang', $dataKeranjang);
    }


    public function index()
    {
        $dataProduk = produk::all();

        return view('user.produk-kategori', compact('dataProduk'));
    }

    public function perawatanBadan()
    {
        $dataProduk = produk::where('kd_kategori', 'PRBDN')->get();

        return view('user.produk-kategori', compact('dataProduk'));
    }

    public function perawatanWajah()
    {
        $dataProduk = produk::where('kd_kategori', 'PRWJH')->get();

        return view('user.produk-kategori', compact('dataProduk'));
    }

    public function perawatanRambut()
    {
        $dataProduk = produk::where('kd_kategori', 'PRRBT')->get();

        return view('user.produk-kategori', compact('dataProduk'));
    }

    public function parfum()
    {
        $dataProduk = produk::where('kd_kategori', 'PRFM')->get();

        return view('user.produk-kategori', compact('dataProduk'));
    }


    // untuk update produk sesuai ceckbox yg diceklis
    public function updateCategories(Request $request)
    {
        $selectedCategories = $request->input('categories', []);

        // Logika untuk mengembalikan produk berdasarkan kategori yang dipilih
        $dataProduk = produk::whereIn('kd_kategori', $selectedCategories)->get();

        return view('user.produk-kategori', compact('dataProduk'));
    }
}
