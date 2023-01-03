@extends('dashboard.layouts.main')

@section('container')

<h1>Tambah Barang dan Layanan</h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <a href="/dashboard/posts" class="btn btn-sm btn-outline-primary">Kembali</a>
      </div>
    </div>
  </div>

  <div class="col-lg-8">
    <form method="post" class="mb-4" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Nama Product</label>
          <input type="text" value="{{ old('title') }}" required class="form-control @error('title') is-invalid @enderror" id="title" name="title">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Upload Gambar Product</label>
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        </div>
        <div class="mb-3">
          <input type="hidden" class="form-control" id="slug" name="slug">
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Harga Product</label>
          <input type="text" required value="{{ old('harga') }}" class="form-control  @error('harga') is-invalid @enderror" id="harga" name="harga">
          @error('harga')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Keterangan Product</label>
          @error('body')
          <p><small class="text-danger">{{ $message }}</small></p>
          @enderror
          <input id="body"  value="{{ old('body') }}" type="hidden" name="body">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/post/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    })
</script>
@endsection