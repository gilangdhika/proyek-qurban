@extends('layout.admin.app')

@section('content')

    <body class="bg-light">
        <div class="container mt-5">
            <h3 class="fw-bold mb-4">Distribusi Qurban</h3>

            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="distribusiTable" class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penerima</th>
                                    <th>Alamat</th>
                                    <th>Jenis Hewan</th>
                                    <th>Jumlah Paket</th>
                                    <th>Kurir</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Contoh data dummy -->
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad Yusuf</td>
                                    <td>Jl. Melati No. 45</td>
                                    <td>Sapi</td>
                                    <td>2</td>
                                    <td>Budi Santoso</td>
                                    <td><span class="badge bg-warning text-dark">Dalam Perjalanan</span></td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Tandai Terkirim</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Siti Aisyah</td>
                                    <td>Gg. Mawar No. 12</td>
                                    <td>Kambing</td>
                                    <td>1</td>
                                    <td>Andi Pratama</td>
                                    <td><span class="badge bg-success">Terkirim</span></td>
                                     <td>
                                        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> --}} 
                                            <button class="btn btn-secondary btn-sm" disabled>Selesai</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Bambang Sutrisno</td>
                                    <td>Desa Sukamaju RT 02 RW 03</td>
                                    <td>Sapi</td>
                                    <td>3</td>
                                    <td>Dina Lestari</td>
                                    <td><span class="badge bg-danger">Belum Dikirim</span></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm">Kirim Sekarang</button>
                                    </td>
                                </tr>
                                <!-- Tambah data penerima lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#distribusiTable').DataTable({
                        pageLength: 10,
                        lengthMenu: [10, 25, 50, 100],
                        language: {
                            search: "Cari:",
                            lengthMenu: "Tampilkan _MENU_ data",
                            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                            paginate: {
                                first: "Awal",
                                last: "Akhir",
                                next: "→",
                                previous: "←"
                            }
                        }
                    });
                });
            </script> --
    </body>
@endsection
