@extends('layout.admin.app')

@section('content')
    <div class="container mt-4">

        <h3 class="fw-bold mb-4">Laporan Keuangan Qurban</h3>

        <!-- Ringkasan Keuangan -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Total Dana Masuk</h6>
                        <h4 class="fw-bold text-success">Rp 120.000.000</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow border-0">
                    <div class="card-body text-center">
                        <h6 class="text-muted">Pembayaran Lunas</h6>
                        <h4 class="fw-bold text-info">85%</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Pemasukan -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary text-white fw-bold">
                Daftar Pemasukan
            </div>
            <div class="card-body">
                <table class="table table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Peserta</th>
                            <th>Jenis Hewan</th>
                            <th>Jumlah Bayar</th>
                            <th>Status</th>
                            <th>Bukti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10-09-2025</td>
                            <td>Ahmad Fauzi</td>
                            <td>Sapi</td>
                            <td>Rp 17.000.000</td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td><a href="{{ url('admin/bukti') }}"class="btn btn btn-outline-primary">Lihat</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>11-09-2025</td>
                            <td>Budi Santoso</td>
                            <td>Kambing</td>
                            <td>Rp 3.000.000</td>
                            <td><span class="badge bg-warning text-dark">Belum</span></td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabel Pengeluaran -->
        <div class="card shadow mb-4">
            <div class="card-header bg-danger text-white fw-bold">
                Daftar Pengeluaran
            </div>
            <div class="card-body">
                <table class="table table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Penanggung Jawab</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12-09-2025</td>
                            <td>Pembelian Hewan</td>
                            <td>Rp 80.000.000</td>
                            <td>Panitia Hewan</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>13-09-2025</td>
                            <td>Transportasi & Distribusi</td>
                            <td>Rp 5.000.000</td>
                            <td>Panitia Distribusi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tombol Export -->
        <div class="text-end">
            <button class="btn btn-success">Download Excel</button>
            <button class="btn btn-danger">Download PDF</button>
        </div>

    </div>
@endsection
