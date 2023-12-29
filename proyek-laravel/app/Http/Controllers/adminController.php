<?php

namespace App\Http\Controllers;

use App\Models\admindami;
use Illuminate\Http\Request;
use App\Models\order;

class adminController extends Controller
{

    public function __construct()
    {
        $dataOrderBaru = order::whereIn('status', ['Sudah bayar', 'Belum bayar'])->get();
    
        view()->share('dataOrderBaru', $dataOrderBaru);
    }

    public function index()
    {
        $dataAdmin = admindami::first();
        return view('admin.seting-profil-admin', compact('dataAdmin'));
    }

    public function update(Request $request)
    {
        $admin = admindami::first();

        $admin->update([
            'nama_admin' => $request->nama,
            'email_admin' => $request->email,
            'no_hp' => $request->no_hp,
            'tgl_lahir' => $request->tgl_lahir,
            // Mengambil password dari database jika tdk dinput user
            'password' => $request->filled('password') ? $request->password : $admin->password,
        ]);

        return redirect()->back();
    }
}
