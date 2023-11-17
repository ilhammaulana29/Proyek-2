@extends('template.main')

@section('title', 'Produk favorit')

@section('custom-css')
<link href="{{ asset('assets/css/pesanan.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-3 kolom-kiri">
            @include('components.sidebar-profil-user')
        </div>
        <div class="col-md-9 kolom-kanan">
            <div class="daftar-wishlist shadow-sm pt-1 pe-4 ps-4 pb-4">
                <form class="mb-4 mt-5 p-1 border border-secondary-subtle rounded" role="search">
                    <input class="form-control form-control-sm border-0 focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2" type="search" placeholder="Cari produk" aria-label="Search">
                </form>
                <div class="produk-favorit">
                    <div class="row mb-4">
                        <div class="col-3 mb-4">
                            <div class="card">
                                <img src="assets/images/produk1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">Deskripsi Produks</p>
                                    </a>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">80.000</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="assets/images/produk1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">Deskripsi Produks</p>
                                    </a>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">80.000</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="assets/images/produk1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">Deskripsi Produks</p>
                                    </a>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">80.000</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="assets/images/produk1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">Deskripsi Produks</p>
                                    </a>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">80.000</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <img src="assets/images/produk1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">Deskripsi Produks</p>
                                    </a>
                                    <a href="" class="text-decoration-none">
                                        <p class="card-text text-dark">80.000</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection