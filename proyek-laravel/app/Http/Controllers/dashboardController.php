<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\userdami;

class dashboardController extends Controller
{
    public function __construct()
    {
        $dataOrderBaru = order::whereIn('status', ['Sudah bayar', 'Belum bayar'])->get();
    
        view()->share('dataOrderBaru', $dataOrderBaru);
    }


    public function index()
    {
        $dataUserRegistrasi = userdami::all();

        $userOrder = order::all();
        
        $pendapatan = Order::where('status', 'dikirim')->sum('harga_produk');


        $labels = ['User Registrasi', 'User Order'];
        $data = [
            $dataUserRegistrasi->count(),
            $userOrder->count(),
        ];

        return view('admin.index', compact('labels', 'data'));
    }


    public function dataOrder()
    {
        $orders = order::all();

        return response()->json($orders);
    }
}
