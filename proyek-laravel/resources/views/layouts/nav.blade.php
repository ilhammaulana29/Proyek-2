<nav class="navbar navbar-expand-lg nav-underline">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="#"><img src="{{asset('assets/images/Logo.png')}}" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto"> <!-- Menambahkan kelas ms-auto -->
        <li class="nav-item">
          <a class="nav-link active me-3" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown no-border">
          <a class="nav-link dropdown-toggle me-3" data-bs-toggle="dropdown" aria-expanded="false">Produk</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Semua</a></li>
            <li><a class="dropdown-item" href="#">Perawatan Badan</a></li>
            <li><a class="dropdown-item" href="#">Perawatan Wajah</a></li>
            <li><a class="dropdown-item" href="#">Perawatan Rambut</a></li>
            <li><a class="dropdown-item" href="#">Parfum</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3" href="#">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak Kami</a>
        </li>
      </ul>
      <form class="" role="search">
        <input class="form-control form-control-sm border-0" type="search" placeholder="Cari produk" aria-label="Search">
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#"><i class="bi bi-person-fill bi-2x"></i></a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" aria-current="page" href="#"><i class="bi bi-cart4"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
