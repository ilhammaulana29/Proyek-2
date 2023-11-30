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
                    <button type="button" class="border-0 rounded" onclick="triggerFileInput('fileInputLogo')" style="width: 8rem; height: 8rem; margin-left: 11rem;">Logo</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInputLogo" name="fileInputLogo" style="display: none;">
                </div>

                <div class="d-flex mb-5">
                    <p>Banner Iklan</p>
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded" onclick="triggerFileInput('fileInput1')" style="width: 8rem; height: 8rem; margin-left: 10rem;">Banner 1</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInput1" name="fileInput1" style="display: none;">
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded ms-2" onclick="triggerFileInput('fileInput2')" style="width: 8rem; height: 8rem;">Banner 2</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInput2" name="fileInput2" style="display: none;">
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded ms-2" onclick="triggerFileInput('fileInput3')" style="width: 8rem; height: 8rem;">Banner 3</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInput3" name="fileInput3" style="display: none;">
                </div>

                <div class="d-flex mb-5">
                    <p>Foto BA</p>
                    <!-- Tombol untuk memicu input file -->
                    <button type="button" class="border-0 rounded" onclick="triggerFileInput('fileInputBA')" style="width: 8rem; height: 8rem; margin-left: 12rem;">Foto BA</button>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="fileInputBA" name="fileInputbaBA" style="display: none;">
                </div>

                <div class="d-flex mb-5">
                    <p>Tentang Kami</p>
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