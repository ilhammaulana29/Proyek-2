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
                            <label for="productName" class="form-label col-sm-2">Nama Produk</label>
                            <div class="col-sm-9 position-relative">
                                <input type="text" id="productName" class="form-control" placeholder="Sea Makeup Acne Cover & Smooth Two Way Cake">
                            </div>
                        </div>        
        
                        <div class="mb-3 row">
                            <label for="productCategory" class="form-label col-sm-2">Kategori Produk</label>
                            <div class="col-sm-9">
                                <select id="productCategory" class="form-select">
                                    <option>Bedak Padat</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
        
                    <div class="mb-3 row mt-3">
                        <label for="productDescription" class="form-label col-sm-2">Deskripsi Produk</label>
                        <div class="col-sm-10">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="productDescription" style="height: 100px"></textarea>
                                <label for="productDescription">flo beauty bar</label>
                            </div>
                        </div>
                    </div>
        
                    <div class="mb-3 row">
                        <label for="productImage" class="form-label col-sm-2">Foto Produk</label>
                        <div class="image">
                            <img src="assets/images/cream.jpeg" class="object-fit-contain border rounded" alt="..." style="max-width: 10%; max-height: 100%;">
                            <img src="assets/images/serum.jpeg" class="object-fit-contain border rounded" alt="..." style="max-width: 10%; max-height: 100%;">
                            <img src="assets/images/toner.jpeg" class="object-fit-contain border rounded" alt="..." style="max-width: 10%; max-height: 100%;">
                        </div>
                    </div>
        
                    <fieldset>
                        <div class="mb-3 row">
                            <label for="productPrice" class="form-label col-sm-2">Harga Produk</label>
                            <div class="col-sm-9 position-relative">
                                <input type="text" id="productPrice" class="form-control" placeholder="Rp 70.000">
                            </div>
                        </div>    
        
                        <div class="mb-3 row">
                            <label for="productStock" class="form-label col-sm-2">Stok Produk</label>
                            <div class="col-sm-9 position-relative">
                                <input type="text" id="productStock" class="form-control" placeholder="10">
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