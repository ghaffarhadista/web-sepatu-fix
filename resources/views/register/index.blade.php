@extends('layouts.main')

@section('container')

    <div class="register-pages container-fluid">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4">
                <main class="form-registration">
                    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                    <h1 class="h3 mb-3 fw-normal text-center">Silahkan Daftar</h1>
                    <form action="/register" method="POST">
                        @csrf
                      <div class="form-floating mb-2">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required  value="{{ old('name') }}">
                        <label for="name">Nama Lengkap</label>
                        @error('name')
                        <div class="invalid-feedback">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="username" placeholder="username" required  value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" name="no_telp" class="form-control  @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="No Telp" required  value="{{ old('no_telp') }}">
                        <label for="no_telp">No Telp</label>
                        @error('no_telp')
                        <div class="invalid-feedback">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="email" required  value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="password" name="password" class="form-control mb-2 rounded-bottom  @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                      </div>
                      <button class="btn-register btn-outline-dark w-100 btn btn-lg my-3" type="submit">Register</button>
                    </form>
                    <small>Sudah Punya Akun? <a href="/login" class="text-decoration-none">Login!</a></small>
                  </main>
            </div>
        </div>
    </div>
@endsection