<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <!-- link icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- link css sendiri -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  @include('layouts.nav')

  <!-- banner -->
  <div id="carouselExampleIndicators" class="carousel slide mt-5 background">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex justify-content-between">
          <img src="assets/images/baner1.png" class="w-80" alt="..."> <!-- Gambar kiri -->
          <img src="assets/images/baner2.png" class="w-80 ms-5" alt="..."> <!-- Gambar tengah (aktif) -->
          <img src="assets/images/baner3.png" class="w-80" alt="..."> <!-- Gambar kanan -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="container">
  @include('layouts.kategori')
  @include('layouts.produk')
</div>
@include('layouts.tentang-kami')
@include('layouts.kontak-kami')
@include('layouts.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>