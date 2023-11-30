@extends('template.admin')

@section('title', 'Produk admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
                @include('components.sidebar-admin')
            <div class="col-md kolom-kanan">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Produk Aktif</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Produk Nonakitf</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk Habis</a>
                          </li>
                        </ul>
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
                    </div>
                  </nav>

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Gambar</th>
                        <th scope="col">Info Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scopr="col">
                            <a href="" class="" class="text-decoration-none color-black">
                                <i class="bi bi-plus-circle"></i>Tambah Produk
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                            <img src="assets/images/produk1.png" alt="" style="max-width: 120px; max-height: 120px; object-fit: cover; object-position: center; aspect-ration: 1/1;">
                        </th>
                        <td>
                            <p style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4;">
                                Feeling So Good
                            </p>
                        </td>
                        <td>
                            <p style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                                Rp. 75.000
                            </p>
                        </td>
                        <td>
                            12
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row" class="border">
                            <img src="assets/images/produk1.png" alt="" style="max-width: 120px; max-height: 120px; object-fit: cover; object-position: center; aspect-ration: 1/1;">
                        </th>
                        <td>
                            <p style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 4;">
                                Feeling So Good
                            </p>
                        </td>
                        <td>
                            <p style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                                Rp. 75.000
                            </p>
                        </td>
                        <td>
                            124
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
            </div>
        </div>
    </div>
