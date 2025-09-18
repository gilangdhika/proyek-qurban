@extends('layout.admin.app')

@section('content')

    <body class="bg-light">
        <div class="container mt-5">
            <h3 class="mb-4">Bukti Pembayaran</h3>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <img src="{{ asset('assets/images/products/Buku Keuangan.jpeg') }}" class="card-img-top"
                            alt="Bukti Transfer">
                        <div class="card-body">
                            <h5 class="card-title">Ahmad Fauzi</h5>
                            <p class="mb-1"><strong>Email:</strong> ahmad@example.com</p>
                            <p class="mb-1"><strong>No HP:</strong> 08123456789</p>
                            <p class="mb-1"><strong>Jumlah Hewan:</strong> 1 Sapi</p>
                            <p class="mb-1"><strong>Total Harga:</strong> Rp 3.500.000</p>
                            <p class="mb-1"><strong>Status:</strong> <span class="badge bg-warning text-dark">Belum
                                    Diverifikasi</span></p>
                        </div>
                        <div class="d-grid mb-3">
                            <a href="{{ url('/verifbayar') }}" class="btn btn-dark btn-xl">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
