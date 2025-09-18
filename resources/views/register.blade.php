@extends('layout.frontend.app')

@section('hide_navbar', true)

@section('content')
    <section class="page-section d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 rounded-3">
                        <div class="card-body p-5">
                            <h2 class="text-center mb-4">Register</h2>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Nama -->
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama lengkap" required>
                                    <label for="name">Nama Lengkap</label>
                                </div>
                                <!-- Email -->
                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="nama@gmail.com" required>
                                    <label for="email">Email</label>
                                </div>
                                <!-- Password -->
                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <!-- Konfirmasi Password -->
                                <div class="form-floating mb-3">
                                    <input type="password" name="password_confirmation" class="form-control"
                                        id="password_confirmation" placeholder="Konfirmasi Password" required>
                                    <label for="password_confirmation">Konfirmasi Password</label>
                                </div>
                                <!-- Alamat -->
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap" style="height: 100px"
                                        required></textarea>
                                    <label for="alamat">Alamat</label>
                                </div>
                                <!-- Tombol -->
                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-primary btn-xl">Register</button>
                                </div>
                                      <!-- Tombol kembali -->
                                <div class="d-grid mb-3">
                                    <a href="{{ url('/') }}" class="btn btn-dark btn-xl">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
