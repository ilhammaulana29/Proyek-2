<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\produk;
use App\Models\toko;
use App\Http\Controllers\keranjangController;


class homeController extends keranjangController
{
    public function index()
    {
        $dataProduk = produk::join(
            'kategori',
            'produk.kd_kategori',
            '=',
            'kategori.kd_kategori'
        )
            ->get();

        $dataToko = toko::all();
        return view('user.index', compact('dataProduk','dataToko'));
    }

    public function show($id)
    {
        $dataProduk = produk::find($id);
        $dataToko = toko::all();

        return view('user.deskripsi-produk', compact('dataProduk','dataToko'));
    }

}
