@extends('template.admin')

@section('title', 'Daftar pesanan')

@section('content')
    <div class="container-fluid">
        <div class="row">
                @include('components.sidebar-admin')
            <div class="col-md kolom-kanan">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <a class="nav-link active ms-4" aria-current="page" href="#">Semua Pesanan</a>
                          <a class="nav-link ms-4" href="#">Pesanan Baru</a>
                          <a class="nav-link ms-4" href="#">Siap Diambil</a>
                          <a class="nav-link ms-4" href="#">Pesanan Selesai</a>
                          <a class="nav-link dibatalkan ms-4" aria-dibatalkan="true">Dibatalkan</a>
                          <form class="d-flex" role="search">
                        </div>
                      </div>
                    </div>
                  </nav>
                  <div class="d-flex">
                    <input class="form-control me-3" type="search" placeholder="Cari di sini" aria-label="Search">
                    <div class="col-auto">
                        <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                        <select class="form-select" id="autoSizingSelect">
                        <option selected>Urutkan...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                    </div>
                  </div>
                  <div class="isi-pesanan-ada mt-3 shadow-sm p-3 rounded">
                    <div class="status-pesanan d-flex justify-content-between">
                        <p class="fw-medium">Pesanan No.00001213758</p>
                        <p class="fw-medium">14 Oktober 2023 07.59</p>
                        <p class="fw-semibold">Dikirim</p>
                    </div>
                    <div class="detail-pesanan d-flex lh-1">
                        <img src="assets/images/produk1.png" alt="" style="width: rem; height:10rem;">
                        <div class="nama-produk harga">
                            <p class="fw-medium">Felling So Good</p>
                            <p class="fw-medium">1</p>
                            <p class="fw-medium">Rp 75.000</p>
                        </div>
                    </div>
                    <p class="fw-medium fs-4 text-end">Total Rp 75.000</p>
                </div>
                  <div class="isi-pesanan-ada mt-3 shadow-sm p-3 rounded">
                    <div class="status-pesanan d-flex justify-content-between">
                        <p class="fw-medium">Pesanan No.00001213758</p>
                        <p class="fw-medium">14 Oktober 2023 07.59</p>
                        <p class="fw-semibold">Menunggu Tanggapan Penjual</p>
                    </div>
                    <div class="detail-pesanan d-flex lh-1">
                        <img src="assets/images/produk1.png" alt="" style="width: rem; height:10rem;">
                        <div class="nama-produk harga">
                            <p class="fw-medium">Felling So Good</p>
                            <p class="fw-medium">1</p>
                            <p class="fw-medium">Rp 75.000</p>
                        </div>
                    </div>
                    <div class="btns mt-3 text-end">
                        <button type="button" class="btn">Tolak</button>
                        <button type="button" class="btn">Terima</button>
                    </div>
                    <p class="fw-medium fs-4 text-end">Total Rp 75.000</p>
                </div>

            </div>
            </div>
        </div>
@endsection
            </div>
        </div>
    </div>

