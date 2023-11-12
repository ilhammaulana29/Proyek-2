<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesanan user</title>
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- link css sendiri -->
    <link href="{{ asset('assets/css/pesanan.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    @include('components.nav')
    <div class="container-fluid mt-2">
        <div class="row">
            @include('components.sidebar-profil-user')
            <div class="col-md-9 kolom-kanan">
                <div class="alur-pesanan ps-4 pt-1 pe-4 pb-4 shadow-sm raunded">
                    <form class="mb-4 mt-5 p-1 border border-secondary-subtle rounded" role="search">
                        <input class="form-control form-control-sm border-0 focus-ring focus-ring-danger py-1 px-2 text-decoration-none border rounded-2" type="search" placeholder="Cari pesanan" aria-label="Search">
                    </form>
                    <a class="btn" href="#" role="button">Semua</a>
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
    @include('components.kontak-kami')
    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>