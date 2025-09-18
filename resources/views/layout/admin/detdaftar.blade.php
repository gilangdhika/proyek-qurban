@extends('layout.admin.app')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran</title>
    <div class="container mt-4">
        <h3 class="fw-bold mb-4">Detail Pendaftaran</h3>

        <!-- Card Informasi Peserta & Pendaftaran (Banyak Peserta, Model Card Urut ke Bawah) -->
        @php
            $pesertas = [
                [
                    'nama' => 'Ahmad Fauzi Rahman',
                    'email' => 'ahmad.fauzi@email.com',
                    'hp' => '+62 812-3456-7890',
                    'periode' => '2025',
                    'hewan' => 'Kambing',
                    'jumlah' => '2 Ekor',
                    'harga' => 'Rp 4.500.000',
                    'status' => 'Lunas',
                    'badge' => 'success',
                ],
                [
                    'nama' => 'Siti Nurhaliza',
                    'email' => 'siti.nur@email.com',
                    'hp' => '+62 813-9876-5432',
                    'periode' => '2025',
                    'hewan' => 'Sapi',
                    'jumlah' => '1 Ekor',
                    'harga' => 'Rp 15.000.000',
                    'status' => 'Belum Lunas',
                    'badge' => 'warning text-dark',
                ],
                [
                    'nama' => 'Budi Santoso',
                    'email' => 'budi.santoso@email.com',
                    'hp' => '+62 812-2222-3333',
                    'periode' => '2025',
                    'hewan' => 'Kambing',
                    'jumlah' => '1 Ekor',
                    'harga' => 'Rp 2.250.000',
                    'status' => 'Lunas',
                    'badge' => 'success',
                ],
            ];
        @endphp
        @foreach ($pesertas as $peserta)
            <!-- Card Informasi Peserta -->
            <div class="card shadow-sm mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Informasi Peserta</h5>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <strong>Nama:</strong> {{ $peserta['nama'] }}
                    </div>
                    <div class="info-item">
                        <strong>Email:</strong> {{ $peserta['email'] }}
                    </div>
                    <div class="info-item">
                        <strong>No HP:</strong> {{ $peserta['hp'] }}
                    </div>
                </div>
            </div>
            <!-- Card Informasi Pendaftaran -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Informasi Pendaftaran</h5>
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <strong>Periode:</strong> {{ $peserta['periode'] }}
                    </div>
                    <div class="info-item">
                        <strong>Jenis Hewan:</strong> {{ $peserta['hewan'] }}
                    </div>
                    <div class="info-item">
                        <strong>Jumlah:</strong> {{ $peserta['jumlah'] }}
                    </div>
                    <div class="info-item">
                        <strong>Total Harga:</strong> {{ $peserta['harga'] }}
                    </div>
                    <div class="info-item">
                        <strong>Status:</strong>
                        <span class="badge bg-{{ $peserta['badge'] }}">{{ $peserta['status'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach

        <! Action Buttons ->
            <div class="mt-3 d-flex gap-2">
                <button class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </button>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditDetailPendaftaran">
                    <i class="fas fa-edit me-1"></i> Edit
                </button>
            </div>
            <!-- Modal Edit Detail Pendaftaran -->
            <div class="modal fade" id="modalEditDetailPendaftaran" tabindex="-1"
                aria-labelledby="modalEditDetailPendaftaranLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalEditDetailPendaftaranLabel">Edit Detail Pendaftaran</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="editNamaPeserta" class="form-label">Nama Peserta</label>
                                    <input type="text" class="form-control" id="editNamaPeserta" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editEmailPeserta" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="editEmailPeserta" value=""
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="editNoHpPeserta" class="form-label">No HP</label>
                                    <input type="text" class="form-control" id="editNoHpPeserta" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editJenisHewan" class="form-label">Jenis Hewan</label>
                                    <input type="text" class="form-control" id="editJenisHewan" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editJumlah" class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" id="editJumlah" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editHarga" class="form-label">Total Harga</label>
                                    <input type="text" class="form-control" id="editHarga" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="editStatus" class="form-label">Status</label>
                                    <select class="form-select" id="editStatus" required>
                                        <option value="Lunas">Lunas</option>
                                        <option value="Belum Lunas">Belum Lunas</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
