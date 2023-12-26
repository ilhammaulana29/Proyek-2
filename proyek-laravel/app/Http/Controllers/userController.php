<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use Illuminate\Http\Request;
use App\Models\toko;
use App\Models\userdami;

class userController extends Controller
{

    public function __construct()
    {
        $id_user = userdami::where('id_user', 1)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();

        $dataToko = toko::all();
        view()->share('dataToko', $dataToko);
        view()->share('dataKeranjang', $dataKeranjang);
    }

    public function profilUser(){
        return view('user.profil-user');
    }
    // public function pesananUser(){
    //     return view('user.pesanan-user');
    // }
    public function alamatUser(){
        return view('user.alamat-user');
    }
    public function wishlistUser(){
        return view('user.wishlist');
    }
}
