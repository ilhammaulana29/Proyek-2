<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\toko;
use App\Models\userdami;


class orderController extends Controller
{
    public function index()
    {
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();
        $dataToko = toko::all();
        $dataOrder = order::where('id_user', $id_user->id_user)->get();
        return view('user.pesanan-user', compact('dataOrder', 'dataToko', 'dataKeranjang'));

    }

    public function pesananMenungguKonfirmasi()
    {
        $dataToko = toko::all();
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataOrder = order::where('id_user', $id_user->id_user)
        ->whereIn('status', ['Belum bayar', 'Sudah bayar'])
        ->get();

        return view('user.pesanan-user', compact('dataOrder','dataToko','dataKeranjang'));

    }

    public function pesananDikemas()
    {
        $dataToko = toko::all();
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataOrder = order::where('id_user', $id_user->id_user)->where('status', 'Dikemas')->get();
        return view('user.pesanan-user', compact('dataOrder','dataToko','dataKeranjang'));


    }

    public function pesananDikirim()
    {
        $dataToko = toko::all();
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataOrder = order::where('id_user', $id_user->id_user)->where('status', 'Dikirim')->get();
        return view('user.pesanan-user', compact('dataOrder','dataToko','dataKeranjang'));


    }

    public function pesananSelesai()
    {
        $dataToko = toko::all();
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataOrder = order::where('id_user', $id_user->id_user)->where('status', 'Selesai')->get();
        return view('user.pesanan-user', compact('dataOrder','dataToko','dataKeranjang'));


    }

    public function pesananDibatalkan()
    {
        $dataToko = toko::all();
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataOrder = order::where('id_user', $id_user->id_user)->where('status', 'Dibatalkan')->get();
        return view('user.pesanan-user', compact('dataOrder','dataToko','dataKeranjang'));


    }

    public function pesananDikembalikan()
    {
        $dataToko = toko::all();
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataOrder = order::where('id_user', $id_user->id_user)->where('status', 'Pengembalian')->get();
        return view('user.pesanan-user', compact('dataOrder','dataToko','dataKeranjang'));


    }
}
