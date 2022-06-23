@extends('layouts.secondary')

    @section('container')
    <div class="container conta-Login">
      <div class="row">
          <div class="col">
            
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                  {{ session('loginError') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

              <main class="form-signin">
                  <h1 class="h3 mb-3 fw-normal text-center">Login for Admin</h1>
                  <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
                      <label for="email">Email address</label>
                      @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-floating">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                      <label for="password">Password</label>
                    </div>
                    <button class="send-btn" type="submit">Login</button>
                  </form>
                  <small class="d-block text-center mt-3">*login hanya untuk admin <br> jika ingin menambah destinasi silahkan isi form kontak dibawah ini</small>
                </main>

              </div>
            </div>
          </div>

    @endsection