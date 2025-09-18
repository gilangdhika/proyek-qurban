@extends('layout.admin.app')

@section('content')
    <div class="container-fluid">
        <h2 class="fw-bold mb-4">Periode Qurban</h2>

        <!-- Periode Aktif -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h4 class="card-title mb-3">Periode 2025</h4>
                <p><strong>Jenis Tahun:</strong> 1446 H/ 2025 M</p>
                <p><strong>Tanggal Pelaksanaan:</strong> 17 Juni 2025</p>
                <p><strong>Tanggal Selesai:</strong> 19 Juni 2025</p>
                <p>
                    <strong>Status:</strong>
                    <span class="badge bg-dark">Nonaktif</span>
                </p>

                <!-- Statistik Ringkas -->
                <div class="row g-3 mt-3">
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h6 class="card-title">Total Peserta</h6>
                                <p class="display-6 fw-bold text-success">124</p>
                                <small class="text-muted">Orang</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h6 class="card-title">Total Hewan</h6>
                                <p class="display-6 fw-bold text-primary">85</p>
                                <small class="text-muted">Ekor</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <h6 class="card-title">Total Penerima</h6>
                                <p class="display-6 fw-bold text-warning">450</p>
                                <small class="text-muted">Keluarga</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Periode Berikutnya -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h4 class="card-title mb-3">Periode 2026</h4>
                <p><strong>Jenis Tahun:</strong> 1447 H/ 2026 M</p>
                <p><strong>Tanggal Pelaksanaan:</strong> 29 Juni 2026</p>
                <p><strong>Tanggal Selesai:</strong> 30 Juni 2026</p>
                <p>
                    <strong>Status:</strong>
                    <span class="badge bg-secondary">Belum Aktif</span>
                </p>

                <!-- Statistik Ringkas kosong -->
                <div class="alert alert-warning mt-3">
                    Data periode 2026 belum tersedia.
                </div>
            </div>
        </div>
    </div>
@endsection
