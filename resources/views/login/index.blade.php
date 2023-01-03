@extends('layouts.main')

@section('container')

    <div class="container login-pages row justify-content-center">
        <div class="col-md-3">

          @if (session()->has('success'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>   
          @endif

          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>   
          @endif

            <main class="form-signin">
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
                <form action="/login" method="POST">
                  @csrf
                  <div class="form-floating mb-2">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                    @error('email')
                     <small class="text-danger">{{ $message }}</small> 
                     @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    <small class="text-danger">@error('password')</small>
                    {{ $message }} 
                    @enderror
                  </div>
                  <button class="w-100 btn btn-lg btn-outline-light  mb-2 btn-loginn" type="submit">Login</button>
                </form>
                <small>Belum Punya Akun?  <a href="/register" class="text-decoration-none fw-bold">Daftar!</a></small>
                <p class="mt-5 mb-3 text-muted text-center">&copy; Hagama Putra Mandiri</p>
              </main>
        </div>
    </div>
@endsection