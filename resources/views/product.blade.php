@extends('layouts.main')

@section('container')
    <h1>Halaman  {{ $title }}</h1>

   <div class="shop-page container mt-5">
    <div class="row row-judul">
        <div class="col">
            <h1 class="judul-shop text-center fw-bold">Product</h1>
        </div>
    </div>
    {{-- foreach looping nampilin data --}}
    <div class="row">
    @foreach ($posts as $post)
        <div class="col-md-6 col-lg-4 col-sm-12 mb-4">
            <div class="unit-box" style="background-color: rgb(247, 239, 239)">
                <h3 class="unit-name text-dark fw-bolder">{{ $post->title }}</h3>
            <div class="unit-img">
                @if ($post->image)
                <img style="height: 150px;" src="{{ asset('storage/' . $post->image) }}" alt="Gambar">
            @else
                <img src="#" alt="Gambar">
                
            @endif
            </div>
                <h3 class="unit-price text-dark">Rp. {{ $post->harga }}</h3>
            </div>
        </div>
        @endforeach
    </div>
</div>
   </div>

@endsection