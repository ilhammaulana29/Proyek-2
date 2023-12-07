@extends('template.main')

@section('title','Home')

@section('content')
    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide mt-5 background">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex justify-content-center gap-5">
                <img src="assets/images/baner1.png" class="w-50" alt="...">
                <img src="assets/images/baner2.png" class="w-50" alt="...">
                <img src="assets/images/baner3.png" class="w-50" alt="...">
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
        @include('components.kategori')
    </div>
    @include('components.produk')
    @include('components.tentang-kami')
@endsection