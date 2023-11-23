@extends('template.admin')

@section('title', 'Seting admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.sidebar-admin')
        <div class="col-md kolom-kanan m-3">
            @include('components.navbar-seting-admin')
            <form action="" method="post" class="toko mt-5 shadow-sm p-3 ps-4 rounded mb-5" enctype="multipart/form-data">
                <div class="d-flex mb-5">
                    <p>Logo Toko</p>
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded" onclick="triggerFileInput()" style="width: 8rem; height: 8rem; margin-left: 11rem;">Cari Logo</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInput" name="fileInput" style="display: none;">
                </div>

                <div class="d-flex mb-5">
                    <p>Banner Iklan</p>
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded" onclick="triggerFileInput()" style="width: 8rem; height: 8rem; margin-left: 10rem;">Banner 1</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInput" name="fileInput" style="display: none;">
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded ms-2" onclick="triggerFileInput()" style="width: 8rem; height: 8rem;">Banner 2</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInput" name="fileInput" style="display: none;">
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded ms-2" onclick="triggerFileInput()" style="width: 8rem; height: 8rem;">Banner 3</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInput" name="fileInput" style="display: none;">
                </div>

                <div class="d-flex mb-5">
                    <p>Banner Iklan</p>
                    <textarea name="" id="" cols="100" rows="10" style="margin-left: 10rem;"></textarea>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-batal border-danger-subtle col-5 mx-auto fw-semibold">Batal</button>
                    <button type="submit" class="btn btn-simpan col-5 mx-auto fw-semibold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection