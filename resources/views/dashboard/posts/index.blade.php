@extends('dashboard.layouts.main')

@section('container')
<h1>Halo Admin G-SHOES</h1>
<div class="border-bottom mb-3">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
    <div class="btn-group me-2">
      <a href="/dashboard/posts/create" class="btn btn-sm btn-outline-primary">Tambah Product</a>
    </div>
  </div>
  <div class="btn-toolbar mb-2 mb-md-0">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
    @endif
  </div>
</div>

  <div class="container-sm">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-sm-3">
          <div class="card mb-3" style="width: 18rem;">
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar">
        @else
            <img src="#" alt="Gambar">
            
        @endif
              <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">Rp. {{ $post->harga }}</p>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
              <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Yakin hapus data?')"><span data-feather="trash-2"></span></button>
              </form>
          </div>
      </div>
  </div>
  @endforeach
  </div>
    
@endsection