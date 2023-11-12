<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil user</title>
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- link css sendiri -->
    <link href="{{ asset('assets/css/profil.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('components.nav')
    <div class="container-fluid mt-2">
        <div class="row">
            @include('components.sidebar-profil-user')
            <div class="col-md-9 kolom-kanan">
                <div class="profil shadow-sm" style="width: 62rem; height: 20rem;">
                    <div class="card border-0" style="width: 62rem; height: 10rem;">
                        <img src="assets/images/background-profil.png" class="card-img-top" alt="..." style="object-fit: cover; width:100%; height:100% ">
                        <div class="card-body d-flex">
                            <div class="foto-profil">
                                <img src="assets/images/foto-cewe.png" class="rounded-circle img-thumbnail" alt="" style="object-fit: cover; width:13rem; height:13rem">
                            </div>
                            <div class="identitas ms-3">
                                <p class="card-text fs-4 fw-semibold">Puja Ayu Trisnanda <i class="bi bi-pencil-square fs-4 fw-bold ms-5"></i></p>
                                <p class="card-text fs-6 fw-bold">pujaayut@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" method="" class="profil mt-5 shadow-sm p-3 ps-4 rounded mb-5">
                    <p class="fs-3 fw-bold">EDIT PROFIL</p>
                    <div class="row mb-3">
                        <p class="fw-semibold">Jenis Kelamin</p>
                        <div class="form-check col-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki-Laki
                            </label>
                        </div>
                        <div class="form-check col-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                    </div>
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
    @include('components.kontak-kami')
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>