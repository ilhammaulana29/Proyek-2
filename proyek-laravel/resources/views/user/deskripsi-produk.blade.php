@extends('template.main')

@section('title', 'Deskripsi produk')

@section('content')
<div class="detail-produk" style="margin-bottom: 15rem;">
    <div class="row" style="background-color: #FF9BEF;">
        <div class="col-md-6">
            <div class="card" style="width: 30rem; height: 30rem;">
                <img src="{{ asset('assets/imgProduks/'.$dataProduk->gambar_produk) }}" class="card-img-top" alt="..." style="object-fit: cover; width: 100%; height: 100%;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="stok-harga mt-5 text-white">
                <h2 class="fw-bold">{{ $dataProduk->nama_produk }}</h2>
                <h2>Rp {{ $dataProduk->harga_produk }}</h2>
                <div class="tombol-aksi mt-3">
                    <input type="number" class="rounded border-0" style="width: 5rem; height: 2.4rem">
                    <button type="button" class="btn" style="color: #FF9BEF; background-color: #fff">Tambah ke keranjang</button>
                    <div class="favorit share d-flex mt-3">
                        <a href="" class="d-flex align-items-center text-decoration-none text-white me-3"><i class="bi bi-heart fs-4 me-3"></i> Tambah Favorit</a>
                        <a href="" class="d-flex align-items-center text-decoration-none text-white ms-3"><i class="bi bi-share fs-4 me-3"></i> Bagikan Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="deskripsi text-center mt-4">
        <p class="fs-2 fw-semibold">Deskripsi Produk</p>
        <p class="fw-medium">{{ $dataProduk->deskripsi_produk }}</p>
    </div>
</div>
@endsection
