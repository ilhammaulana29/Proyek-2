<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h4 class="offcanvas-title fw-semibold" id="offcanvasWithBothOptionsLabel">KERANJANG</h4>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <nav class="nav d-flex justify-content-between">
      <div class="form-check mt-2">
        <input class="form-check-input color" type="checkbox" id="flexCheckDanger">
        <label class="form-check-label fw-bold" for="flexCheckDefault">
          Semua
        </label>
      </div>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold" aria-current="page" href="#">Tambah Favorit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold" href="#">Hapus</a>
        </li>
      </ul>
    </nav>

    <hr class="border border-secondary border-1 opacity-10">

    <div class="row produk-keranjang mb-4">
      <div class="col-md-1">
        <input class="form-check-input" type="checkbox">
      </div>

      <div class="col-md-4">
        <img src="/assets/images/scrub.jpeg" class="card-img-top" alt="...">
      </div>

      <div class="col-md-6 lh-1">
        <p>Scrub F-100</p>
        <p style="color: #FFA3B2;">Rp 65.000</p>
        <input type="number" class="rounded border-1" style="width: 6rem; height: 2rem">
      </div>
    </div>

    <div class="d-flex justify-content-between">
      <p class="fs-4">TOTAL</p>
      <p class="fs-4" style="color: #FFA3B2;">Rp 65.000</p>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <button type="submit" class="btn btn-batal border-danger-subtle w-100 fw-semibold">Beli Sekarang</button>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-simpan w-100 fw-semibold">Lanjut Belanja</button>
      </div>
    </div>
  </div>
</div>