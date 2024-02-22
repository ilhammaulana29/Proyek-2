<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;


class dashboardController extends Controller
{
    public function __construct()
    {
        $dataOrderBaru = order::whereIn('status', ['Sudah bayar', 'Belum bayar'])->get();
    
        view()->share('dataOrderBaru', $dataOrderBaru);
    }


    public function index()
    {
        $dataUserRegistrasi = User::all();

        $userOrder = order::all();
        
        $pendapatan = Order::where('status', 'dikirim')->sum('harga_produk');


        $labels = ['User Registrasi', 'User Order'];
        $data = [
            $dataUserRegistrasi->count(),
            $userOrder->count(),
        ];

        // untuk menampilkan last_seen user
        $user = User::orderBy('last_seen', 'DESC')->get();

        return view('admin.index', compact('labels', 'data', 'user'));
    }


    public function dataOrder()
    {
        $orders = order::all();

        return response()->json($orders);
    }
}
