@extends('layouts.main')

@section('container')
<section class="home" id="home">
    <div class="jumbotron container-fluid mb-3 pb-4">
        <div class="banner h-100 container">
            <div class="row h-100">
                <div class="col-lg-6">
                   <img src="img/vans.png" class="img-fluid" alt="vans">
                </div>
                <div class="col-lg-6 d-flex flex-column content-left">
                    <h1 class="heading fw-bold pt-5 text-dark">
                        G-Shoes
                    </h1>
                    <p class="subheading text-dark">
                        G-Shoes buka yesus!
                    </p>
                    <div class="btn-home mt-5">
                        <a href="#shop" class="btn btn-dark fw-bold py-2 px-3 px-lg-4 py-lg-3">Product</a>
                        <a href="/about" class="btn btn-outline-dark fw-bold ms-4 py-2 px-3 px-lg-4 py-lg-3">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shop-section" id="shop">
    <div class="container-md">
        <div class="row row-judul">
            <div class="col">
                <h1 class="judul-shop text-center">Product</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-sm-12 mb-3">
                <div class="unit-box">
                    <h3 class="unit-name text-dark"> {{ $posts[4]->title }}</h3>
                    <img src="{{ asset('storage/' . $posts[4]->image) }}" alt="image-hagama-putra" class="unit-img">
                    <h3 class="unit-price text-dark">Rp {{ $posts[4]->harga }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="unit-box">
                    <h3 class="unit-name text-dark">{{ $posts[1]->title }}</h3>
                    <img src="{{ asset('storage/' . $posts[1]->image) }}" alt="image-hagama-putra" class="unit-img">
                    <h3 class="unit-price text-dark">Rp {{ $posts[1]->harga }}</h3>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="unit-box">
                    <h3 class="unit-name text-dark">{{ $posts[5]->title }}</h3>
                    <img src="{{ asset('storage/' . $posts[5]->image) }}" alt="image-hagama-putra" class="unit-img">
                    <h3 class="unit-price text-dark">Rp. {{ $posts[5]->harga }} </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-sm text-center">
        <a href="/product" class="btn btn-outline-dark fw-bold ms-4 py-2 px-3 px-lg-4 py-lg-3">Lebih Banyak</a>
    </div>
</section>


@endsection
