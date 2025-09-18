@extends('layout.admin.app')

@section('content')

    <body class="bg-light">
        <div class="container mt-5">
            <h3 class="mb-4">Verifikasi Pembayaran</h3>
            <div class="row g-4">
                <!-- Card Peserta 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x200?text=Bukti+Transfer" class="card-img-top"
                            alt="Bukti Transfer">
                        <div class="card-body">
                            <h5 class="card-title">Ahmad Fauzi</h5>
                            <p class="mb-1"><strong>Email:</strong> ahmad@example.com</p>
                            <p class="mb-1"><strong>No HP:</strong> 08123456789</p>
                            <p class="mb-1"><strong>Jumlah Hewan:</strong> 1 Sapi</p>
                            <p class="mb-1"><strong>Total Harga:</strong> Rp 3.500.000</p>
                            <p class="mb-1"><strong>Status:</strong>
                                <span class="badge bg-warning text-dark">Belum Diverifikasi</span>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-success btn-sm">Verifikasi</button>
                            <a href="{{ url('admin/bukti') }}" class="btn btn-primary btn-sm">Bukti</a>
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </div>
                    </div>
                </div>

                <!-- Card Peserta 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x200?text=Bukti+Transfer" class="card-img-top"
                            alt="Bukti Transfer">
                        <div class="card-body">
                            <h5 class="card-title">Siti Aisyah</h5>
                            <p class="mb-1"><strong>Email:</strong> siti@example.com</p>
                            <p class="mb-1"><strong>No HP:</strong> 08987654321</p>
                            <p class="mb-1"><strong>Jumlah Hewan:</strong> 2 Kambing</p>
                            <p class="mb-1"><strong>Total Harga:</strong> Rp 5.000.000</p>
                            <p class="mb-1"><strong>Status:</strong>
                                <span class="badge bg-success">Lunas</span>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-success btn-sm">Verifikasi</button>
                            <a href="{{ url('admin/bukti') }}" class="btn btn-primary btn-sm">Bukti</a>
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </div>
                    </div>
                </div>

                <!-- Card Peserta 3 -->
                <div class="col-md-4">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x200?text=Bukti+Transfer" class="card-img-top"
                            alt="Bukti Transfer">
                        <div class="card-body">
                            <h5 class="card-title">Budi Santoso</h5>
                            <p class="mb-1"><strong>Email:</strong> budi@example.com</p>
                            <p class="mb-1"><strong>No HP:</strong> 08765432100</p>
                            <p class="mb-1"><strong>Jumlah Hewan:</strong> 1 Sapi (Patungan)</p>
                            <p class="mb-1"><strong>Total Harga:</strong> Rp 2.000.000</p>
                            <p class="mb-1"><strong>Status:</strong>
                                <span class="badge bg-danger">Ditolak</span>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <button class="btn btn-success btn-sm">Verifikasi</button>
                            <a href="{{ url('admin/bukti') }}" class="btn btn-primary btn-sm">Bukti</a>
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
