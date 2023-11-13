@extends('template.main')

@section('title', 'Pesanan user')

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
                <div class="alur-pesanan ps-4 pt-1 pe-4 pb-4 shadow-sm raunded">
                    <form class="mb-4 mt-5 p-1 border border-secondary-subtle rounded" role="search">
                        <input class="form-control form-control-sm border-0 focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2" type="search" placeholder="Cari pesanan" aria-label="Search">
                    </form>
                    <a class="btn active" href="#" role="button">Semua</a>
                    <a class="btn" href="#" role="button">Menunggu Konfirmasi</a>
                    <a class="btn" href="#" role="button">Dikemas</a>
                    <a class="btn" href="#" role="button">Dikirim</a>
                    <a class="btn" href="#" role="button">Selesai</a>
                    <a class="btn" href="#" role="button">Dibatalkan</a>
                    <a class="btn" href="#" role="button">Pengembalian</a>
                    <!-- @include('components.pesanan-kosong') -->
                    @include('components.pesanan-ada')
                </div>
            </div>
        </div>
    </div>
@endsection