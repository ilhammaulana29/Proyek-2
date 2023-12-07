@extends('template.admin')

@section('title', 'Seting admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('components.sidebar-admin')
        <div class="col-md kolom-kanan m-3">
            @include('components.navbar-seting-admin')
            <form action="/seting-toko-admin/update" method="post" class="toko mt-5 shadow-sm p-3 ps-4 rounded mb-5" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                @foreach($dataToko as $item)
                <div class="d-flex mb-5">
                    <p>Logo Toko</p>
                    <label for="logo" style="width: 8rem; height: 8rem; margin-left: 11rem; background-color:salmon;"><p class="po">Ubah Logo</p></label>
                    <!-- Input file yang disembunyikan -->
                    <input type="file" id="logo" class="form-control" name="logo_toko" style="display: none;">
                </div>
                
                <div class="d-flex mb-5">
                    <p>Foto BA</p>
                    <label for="fotoBa" style="width: 8rem; height: 8rem; margin-left: 12rem; background-color:salmon;">Ubah Foto</label>
                    <input type="file" id="fotoBa" class="form-control" name="foto_ba" style="display: none;">
                </div>
                
                <div class="d-flex mb-5">
                    <p>Email Toko</p>
                    <input type="email" id="email" class="form-control" name="email_toko" style="margin-left: 11rem;" value="{{$item->email_toko}}" placeholder="masukan email">
                </div>

                <div class="d-flex mb-5">
                    <p>Alamat Toko</p>
                    <textarea name="alamat_toko" class="form-control" cols="100" rows="10" style="margin-left: 10rem;">{{$item->alamat_toko}}</textarea>
                </div>
                <div class="d-flex mb-5">
                    <p>Tentang Toko</p>
                    <textarea name="tentang_toko" class="form-control" cols="100" rows="10" style="margin-left: 10rem;">{{$item->tentang_toko}}</textarea>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn btn-batal border-danger-subtle col-5 mx-auto fw-semibold">Batal</button>
                    <button type="submit" class="btn btn-simpan col-5 mx-auto fw-semibold">Simpan</button>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection