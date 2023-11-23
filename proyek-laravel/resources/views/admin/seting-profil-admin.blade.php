@extends('template.admin')

@section('title', 'Seting admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.sidebar-admin')
        <div class="col-md kolom-kanan m-3">
            @include('components.navbar-seting-admin')
            <form action="" method="" class="profil mt-5 shadow-sm p-3 ps-4 rounded mb-5">
                <p class="fs-3 fw-bold">EDIT PROFIL</p>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nama" class="form-label fw-semibold">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="no_hp" class="form-label fw-semibold">No Hp</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <div class="col">
                        <label for="tgl_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                </div>
                <div class="kata-sandi p-3 rounded">
                    <p class="fs-3 fw-bold">KATA SANDI</p>
                    <p class="fw-light">Kosongkan jika tidak ingin mengubah sandi</p>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" class="form-label fw-semibold">Kata sandi</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="col">
                            <label for="confir_password" class="form-label fw-semibold">Ulang sandi</label>
                            <input type="password" class="form-control" id="confir_password" name="confir_password">
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-2 align-items-center">
                    <button type="submit" class="btn btn-batal border-danger-subtle col-5 mx-auto fw-semibold">Batal</button>
                    <button type="submit" class="btn btn-simpan col-5 mx-auto fw-semibold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection