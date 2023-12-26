<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\produk;
use App\Models\toko;
use App\Models\userdami;
use App\Models\order;
use App\Models\keranjang;

class keranjangController extends Controller
{

    public function __construct()
    {
        // $id_user = Auth::user()->id_user;
        // Mendapatkan data keranjang untuk digunakan di semua view
        $id_user = userdami::where('id_user', 2)->first();
        $dataKeranjang = keranjang::where('id_user', $id_user->id_user)->get();
        
        // Membagikan data keranjang ke semua view
        view()->share('dataKeranjang', $dataKeranjang);
    }


    public function tambahKeranjang(Request $request, $id){
        // if(Auth::id()){
            
            // $user = Auth::user();
            $user = userdami::where('id_user', 2)->first();

            $dataProduk = produk::find($id);
            
            $keranjang = new keranjang;

            $keranjang->id_user = $user->id_user;
            $keranjang->nama_user = $user->nama_user;
            $keranjang->email_user = $user->email_user;
            $keranjang->id_produk = $dataProduk->id_produk;
            $keranjang->nama_produk = $dataProduk->nama_produk;
            $keranjang->gambar_produk = $dataProduk->gambar_produk;
            $keranjang->harga_produk = $dataProduk->harga_produk * $request->kuantitas;
            $keranjang->kuantitas = $request->kuantitas;

            $keranjang->save();

            return redirect()->back();

        // }else{

            // return redirect('/login-user');

        // }
    }   

    public function hapusKeranjang($id){
        
        $produkKeranjang = keranjang::find($id);
        $produkKeranjang->delete();

        return redirect()->back();

    }

    public function viewOrder(){

        $dataToko = toko::all();
        $dataUser = userdami::where('id_user', 2)->first();
        return view('user.checkout-produk', compact('dataToko','dataUser'));
    }


    public function prosesOrder(Request $request){

        // Mendapatkan data user
        $user = userdami::where('id_user', 2)->first();

        $dataKeranjang = keranjang::where('id_user', $user->id_user)->get();
        foreach ($dataKeranjang as $item) {
            
        $checkout = new order;

        // Mengisi kolom-kolom checkout
        $checkout->id_user = $user->id_user;
        $checkout->nama_user = $user->nama_user;
        $checkout->email_user = $user->email_user;
        $checkout->alamat_user = $user->alamat_user;
        $checkout->id_produk = $item->id_produk;
        $checkout->nama_produk = $item->nama_produk;
        $checkout->gambar_produk = $item->gambar_produk;
        $checkout->harga_produk = $item->harga_produk;
        $checkout->kuantitas = $item->kuantitas;
        $checkout->status = "Belum bayar";

        // Menyimpan data checkout
        $checkout->save();

        }
        return redirect('/home');
    }
    
    

}
