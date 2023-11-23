@extends('template.main')

@section('title', 'Checkout-produk')

@section('custom-css')
<link href="{{ asset('assets/css/checkout.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid mt-4 mb-5">
    <div class="alamat row shadow-sm ps-4 pt-1 pe-4 pb-4 ms-1 me-1 rounded">
        <div class="tambah-alamat col">
            <div class="d-flex">
                <i class="bi bi-geo-alt fs-3 me-3" style="color: #FF77E9;"></i>
                <p class="fs-4">Alamat Pengiriman</p>
            </div>
            <div class="link">
                <a href="" class="text-decoration-none" style="color: #FF77E9;">Tambah Alamat Baru</a>
            </div>
        </div>
    </div>
    <div class="row mt-4 shadow-sm ps-4 pt-1 pe-4 pb-4 ms-1 me-1 rounded">
        <div class="tag-pesanan d-flex justify-content-between">
            <p class="fs-4">Produk Dipesan</p>
            <p class="fs-6">Harga Satuan</p>
            <p class="fs-6">Jumlah</p>
            <p class="fs-6">Subtotal</p>
        </div>
        <div class="detail-pesanan d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <img src="assets/images/produk1.png" alt="" style="width: 8rem; height: 8rem;">
                <p class="fw-6 fw-semibold">Body Scarlet</p>
            </div>
            <p class="fs-6 fw-semibold">Rp75.000</p>
            <p class="fs-6 fw-semibold">1</p>
            <p class="fs-6 fw-semibold">Rp75.000</p>
        </div>
    </div>
    <div class="row mt-4 shadow-sm ps-4 pt-1 pe-4 pb-4 ms-1 me-1 rounded">
        <div class="opsi-pengiriman">
            <p class="fs-4">Opsi Pengiriman</p>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Hemat</option>
                <option value="2">Cepat</option>
                <option value="3">Chargo</option>
            </select>
            <div class="d-flex justify-content-between mt-3">
                <p class="fs-6 fw-semibold">Akan diterima pada tanggal 15-16 Okt</p>
                <p class="fs-6 fw-semibold">Rp15.000</p>
            </div>
        </div>
    </div>
    <div class="mt-4 shadow-sm ps-4 pt-1 pe-4 pb-4 ms-1 me-1 rounded">
        <p class="fs-4">Metode Pembayaran</p>
        <a class="btn" href="#" role="button">Dana</a>
        <a class="btn" href="#" role="button">BRI</a>
        <a class="btn" href="#" role="button">Mandiri</a>
        <a class="btn" href="#" role="button">BCA</a>
        <a class="btn" href="#" role="button">BNI</a>
    </div>
    <div class="card border-0 shadow-sm mt-4 ms-auto" style="width: 30rem;">
        <div class="card-body d-flex justify-content-between">
            <p class="fw-semibold">Subtotal</p>
            <p class="fw-semibold">Rp75.000</p>
        </div>
        <div class="card-body d-flex justify-content-between">
            <p class="fw-semibold">Diskon</p>
            <p class="fw-semibold">0</p>
        </div>
        <div class="card-body d-flex justify-content-between">
            <p class="fw-semibold">Ongkos kirim</p>
            <p class="fw-semibold">Rp15.000</p>
        </div>
        <hr class="ms-3 me-3 border border-1 border-black">
        <div class="card-body d-flex justify-content-between">
            <p class="fs-4" style="color: #FF77E9;">Total</p>
            <p class="fw-semibold">Rp90.000</p>
        </div>
        <button type="button" class="btn me-3 ms-3 mb-3" style="background-color: #FF77E9; color: #fff;">Bayar Sekarang</button>
    </div>
</div>
@endsection