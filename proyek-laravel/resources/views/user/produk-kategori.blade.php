@extends('template.main')

@section('title', 'Produk Kategori')

@section('custom-css')
    <link href="{{ asset('assets/css/profil.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-md-3 kolom-kiri">
            @include('components.sidebar-produk')
        </div>
        <div class="col-md-9 kolom-kanan">
        <div class="produk-kategori">
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