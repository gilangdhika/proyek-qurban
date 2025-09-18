@extends('layout.frontend.app')

@section('hide_navbar', true)

@section('content')
    <div class="container mt-4">
        <h2 class="fw-bold mb-4 mt-5">Halaman Pendaftaran</h2>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card text-bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Pendaftaran Qurban</h5>
                        <h3>2</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Status Pembayaran</h5>
                        <h3>Lunas</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Notifikasi</h5>
                        <h3>Tidak ada pesan baru</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- Form Pendaftaran Qurban --}}
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Form Pendaftaran Qurban</div>
                    <div class="card-body">
                        <form id="formQurban">
                            <table class="table table-striped table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Jenis Hewan</th>
                                        <th>Jumlah</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Kambing (Rp 2.500.000)</td>
                                        <td><input type="number" class="form-control jumlah" id="kambing" min="0"
                                                value="0" data-harga="2500000"></td>
                                        <td><input type="checkbox" class="cek-hewan" value="Kambing"></td>
                                    </tr>
                                    <tr>
                                        <td>Sapi (Rp 17.000.000)</td>
                                        <td><input type="number" class="form-control jumlah" id="sapi" min="0"
                                                value="0" data-harga="17000000"></td>
                                        <td><input type="checkbox" class="cek-hewan" value="Sapi"></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="mt-3">
                                <h5>Total: <span id="totalHarga">Rp 0</span></h5>
                            </div>

                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                                data-bs-target="#metodePembayaranModal">Daftar
                                Qurban</button>
                            <!-- Modal Metode Pembayaran -->
                            <div class="modal fade" id="metodePembayaranModal" tabindex="-1"
                                aria-labelledby="metodePembayaranLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <!-- Header -->
                                        <div class="modal-header">
                                            <h5 class="modal-title fw-bold" id="metodePembayaranLabel">Metode Pembayaran
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <!-- Body -->
                                        <div class="modal-body">
                                            <!-- Jumlah -->
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Jumlah yang Akan Ditambahkan</label>
                                                <input type="text" class="form-control" value="0" readonly>
                                                <small class="text-muted">Saldo Anda tinggal Rp </small>
                                            </div>

                                            <!-- Metode Pembayaran -->
                                            <label class="fw-semibold mb-2">Tambahkan Metode Pembayaran</label>
                                            <div class="list-group">

                                                <label
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>Kartu Debit atau Kredit</span>
                                                    <input class="form-check-input" type="radio" name="metode"
                                                        value="kartu" checked>
                                                </label>

                                                <label
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>Bank Transfer</span>
                                                    <input class="form-check-input" type="radio" name="metode"
                                                        value="transfer" checked>
                                                </label>
                                                <label
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>OVO</span>
                                                    <input class="form-check-input" type="radio" name="metode"
                                                        value="ovo">
                                                </label>
                                                <label
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>GoPay</span>
                                                    <input class="form-check-input" type="radio" name="metode"
                                                        value="gopay">
                                                </label>
                                                <label
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <span>Dana</span>
                                                    <input class="form-check-input" type="radio" name="metode"
                                                        value="dana">
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="btnBayar">Bayar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- Tabel Hewan Kurban yang Tersedia --}}
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">Hewan Kurban yang Tersedia</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Hewan</th>
                                    <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kambing</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sapi</td>
                                    <td>5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100" id="buktiBayarCard" style="display: none;">
                    <div class="card-header">Upload Bukti Bayar</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="buktiBayar" class="form-label">Bukti Pembayaran</label>
                                <input type="file" class="form-control" id="buktiBayar">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Upload</button>
                        </form>
                        <!-- Tambahan keterangan di bawah upload bukti bayar -->
                        <div class="mt-4 p-3 bg-light border rounded text-center">
                            <h6 class="fw-bold mb-2">Petunjuk Upload Bukti Bayar</h6>
                            <ul class="list-unstyled mb-2">
                                <li>• Pastikan foto bukti transfer jelas dan terbaca.</li>
                                <li>• Format file yang diperbolehkan: JPG, PNG, PDF.</li>
                                <li>• Maksimal ukuran file 2MB.</li>
                            </ul>
                            <span class="text-muted">Setelah upload, admin akan melakukan verifikasi pembayaran
                                Anda.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">Profil Saya</div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" value="Ahmad Fauzi">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" value="ahmad@email.com">
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="form-label">No HP</label>
                                <input type="text" class="form-control" id="nohp" value="081234567890">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" value="*******">
                            </div>
                            {{-- <button type="submit" class="btn btn-primary w-100">Simpan Profil</button> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function hitungTotal() {
                let total = 0;
                document.querySelectorAll('.jumlah').forEach(function(input) {
                    const jumlah = parseInt(input.value) || 0;
                    const harga = parseInt(input.dataset.harga);
                    const checkbox = input.closest('tr').querySelector('.cek-hewan');

                    if (jumlah > 0) {
                        checkbox.checked = true;
                        total += jumlah * harga;
                    } else {
                        checkbox.checked = false;
                    }
                });

                document.getElementById('totalHarga').innerText =
                    "Rp " + total.toLocaleString('id-ID');
            }

            function daftarQurban() {
                let kambing = parseInt(document.getElementById('kambing').value) || 0;
                let sapi = parseInt(document.getElementById('sapi').value) || 0;

                if (kambing === 0 && sapi === 0) {
                    alert("Silakan pilih minimal 1 hewan qurban.");
                    return;
                }

                alert("Pendaftaran berhasil! Silakan upload bukti bayar.");
                document.getElementById('buktiBayarCard').style.display = "block";
            }

            document.querySelectorAll('.jumlah, .cek-hewan').forEach(function(el) {
                el.addEventListener('input', hitungTotal);
                el.addEventListener('change', hitungTotal);
            });

            hitungTotal();

            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('btnBayar').addEventListener('click', function() {
                    // Tutup modal
                    var modal = bootstrap.Modal.getInstance(document.getElementById('metodePembayaranModal'));
                    modal.hide();
                    // Tampilkan upload bukti bayar
                    document.getElementById('buktiBayarCard').style.display = "block";
                    // Scroll ke upload bukti bayar
                    setTimeout(function() {
                        document.getElementById('buktiBayarCard').scrollIntoView({
                            behavior: 'smooth'
                        });
                    }, 300);
                });
            });
        </script>
    @endsection
