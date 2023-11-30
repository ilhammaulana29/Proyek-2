@extends('template.admin')

@section('title', 'Dashboard admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
                @include('components.sidebar-admin')
            <div class="col-md kolom-kanan">
                <form class="shadow-sm p-3">

            <!-- Informasi Produk -->
            <label for="disabledTextInput" class="form-label mb-3">Informasi Produk</label>
            <fieldset>
                <div class="mb-3 row">
                    <label for="disabledTextInput" class="form-label col-sm-2">Nama Produk</label>
                    <div class="col-sm-9 position-relative">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Contoh: Pensil 2B">
                    </div>
                    <div class="col-sm-9 offset-sm-2 mt-4 position-relative">
                        <small class="position-absolute bottom-0 end-0">0/70</small>
                    </div>
                </div>        

                <div class="mb-3 row">
                    <label for="disabledSelect" class="form-label col-sm-2">Kategori Produk</label>
                    <div class="col-sm-9">
                        <select id="disabledSelect" class="form-select">
                            <option>Pilih Kategori</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <!-- Detail Produk -->
            <fieldset>
                <label for="disabledTextInput" class="form-label col-sm-2">Detail Produk</label>
                <img src="assets/images/camile.jpeg" class="object-fit-contain border rounded" alt="..." style="max-width: 10%; max-height: 100%;">
                <img src="assets/images/scrub.jpeg" class="object-fit-contain border rounded" alt="..." style="max-width: 10%; max-height: 100%;">
                <img src="assets/images/esens.jpeg" class="object-fit-contain border rounded" alt="..." style="max-width: 10%; max-height: 100%;">
                <img src="assets/images/cream.jpeg" class="object-fit-contain border rounded" alt="..." style="max-width: 10%; max-height: 100%;">

                <div class="mb-3 row mt-3">
                    <div class="mb-3 row">
                        <label for="disabledTextInput" class="form-label col-sm-2">Deskripsi Produk</label>
                        <div class="col-sm-10">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">flo beauty bar</label>
                            </div>
                        </div>
                    </div>                    
                </div>        
            </fieldset>

            <!-- Harga dan Stok Produk -->
            <fieldset>
                <div class="mb-3 row">
                    <label for="disabledTextInput" class="form-label col-sm-2">Harga dan Stok Produk</label>
                </div>    

                <div class="mb-3 row">
                    <label for="disabledTextInput" class="form-label col-sm-2">Harga Produk</label>
                    <div class="col-sm-9 position-relative">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp.">
                    </div>
                </div>    

                <div class="mb-3 row">
                    <label for="disabledTextInput" class="form-label col-sm-2">Stok Produk</label>
                    <div class="col-sm-9 position-relative">
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="0">
                    </div>
                </div>    
            </fieldset>

            <!-- Buttons -->
            <div class="row mt-3">
                <div class="col-auto ms-auto">
                    <a href="/produk-admin" class="btn btn-primary btn-sm">Batal</a>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                </div>
            </div>
        </form>
            </div>
        </div>
    </div>
@endsection