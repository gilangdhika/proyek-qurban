@extends('layout.frontend.app')

@section('hide_navbar', true)

@section('content')
    <div class="container-fluid">
        <div class="container mt-4">
            <h2 class="fw-bold mb-4 mt-5">Halaman Pendaftaran</h2>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-dark">Logout</button>
            </form>
            <br>
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
                <!-- ================= FORM PENDAFTARAN ================= -->
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3">Form Pendaftaran Qurban</h5>
                    <!-- Daftar Hewan yang Dipilih -->
                    <h6 class="fw-bold">Hewan yang Dipilih:</h6>
                    <table class="table table-sm table-bordered align-middle">
                        <thead>
                            <tr>
                                <th>Jenis</th>
                                <th>Umur</th>
                                <th>Berat</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="hewanTerpilih"></tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="text-end fw-bold">Total</td>
                                <td colspan="2" id="totalHarga" class="fw-bold">Rp 0</td>
                            </tr>
                        </tfoot>
                    </table>

                    <button type="button" class="btn btn-success" id="btnDaftarQurban">Daftar Qurban</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <h5 class="fw-bold mb-3 text-center">Daftar Hewan Tersedia</h5>

                    <div class="row">
                        <div class="col-6">
                            <h6 class="fw-bold text-center">Sapi</h6>

                            <!-- Card Sapi Madura -->
                            <div class="card shadow-sm mb-2" style="font-size: 0.85rem;">
                                <div class="row g-0">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-title mb-1">Sapi Madura</h6>
                                            <small class="text-muted">250 Kg | 3 Thn</small><br>
                                            <button class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#modalSapi1">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Sapi Limousin -->
                            <div class="card shadow-sm mb-2" style="font-size: 0.85rem;">
                                <div class="row g-0">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-title mb-1">Sapi Limousin</h6>
                                            <small class="text-muted">320 Kg | 4 Thn</small><br>
                                            <button class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#modalSapi2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Sapi PO -->
                            <div class="card shadow-sm mb-2" style="font-size: 0.85rem;">
                                <div class="row g-0">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-title mb-1">Sapi PO</h6>
                                            <small class="text-muted">280 Kg | 3 Thn</small><br>
                                            <button class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#modalSapi3">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ================= KAMBING ================= -->
                        <div class="col-6">
                            <h6 class="fw-bold text-center">Kambing</h6>

                            <!-- Card Kambing Jawa -->
                            <div class="card shadow-sm mb-2" style="font-size: 0.85rem;">
                                <div class="row g-0">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-title mb-1">Kambing Jawa</h6>
                                            <small class="text-muted">35 Kg | 1 Thn</small><br>
                                            <button class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#modalKambing1">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Kambing Etawa -->
                            <div class="card shadow-sm mb-2" style="font-size: 0.85rem;">
                                <div class="row g-0">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-title mb-1">Kambing Etawa</h6>
                                            <small class="text-muted">40 Kg | 1.5 Thn</small><br>
                                            <button class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#modalKambing2">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Kambing Boer -->
                            <div class="card shadow-sm mb-2" style="font-size: 0.85rem;">
                                <div class="row g-0">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body p-2">
                                            <h6 class="card-title mb-1">Kambing Boer</h6>
                                            <small class="text-muted">50 Kg | 2 Thn</small><br>
                                            <button class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal"
                                                data-bs-target="#modalKambing3">Detail</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Metode Pembayaran -->
                <div class="modal fade" id="metodePembayaranModal" tabindex="-1"
                    aria-labelledby="metodePembayaranLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Header -->
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold" id="metodePembayaranLabel">Metode Pembayaran
                                </h5>
                                <button type="button" data-bs-dismiss="modal" aria-label="Close"></button>
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

                                    <label class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Kartu Debit atau Kredit</span>
                                        <input class="form-check-input" type="radio" name="metode" value="kartu"
                                            checked>
                                    </label>

                                    <label class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Bank Transfer</span>
                                        <input class="form-check-input" type="radio" name="metode" value="transfer"
                                            checked>
                                    </label>
                                    <label class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>OVO</span>
                                        <input class="form-check-input" type="radio" name="metode" value="ovo">
                                    </label>
                                    <label class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>GoPay</span>
                                        <input class="form-check-input" type="radio" name="metode" value="gopay">
                                    </label>
                                    <label class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Dana</span>
                                        <input class="form-check-input" type="radio" name="metode" value="dana">
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

    <!-- Modal Sapi Madura -->
    <div class="modal fade" id="modalSapi1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Sapi Madura</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/hewan/sapi-madura.jpg') }}"class="img-fluid rounded mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Jenis:</b> Sapi Madura</li>
                        <li class="list-group-item"><b>Umur:</b> 3 Tahun</li>
                        <li class="list-group-item"><b>Berat:</b> 250 Kg</li>
                        <li class="list-group-item"><b>Warna:</b> Cokelat</li>
                        <li class="list-group-item"><b>Harga:</b> Rp 22.000.000</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-success pilih-hewan" data-jenis="Sapi Madura" data-umur="3 Tahun"
                        data-berat="250 Kg" data-harga="22000000">Pilih Hewan Ini</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sapi Limousin -->
    <div class="modal fade" id="modalSapi2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Sapi Limousin</h5>


                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/hewan/Sapi-Limosin.jpg') }}" class="img-fluid rounded mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Jenis:</b> Sapi Limousin</li>
                        <li class="list-group-item"><b>Umur:</b> 4 Tahun</li>
                        <li class="list-group-item"><b>Berat:</b> 320 Kg</li>
                        <li class="list-group-item"><b>Warna:</b> Hitam</li>
                        <li class="list-group-item"><b>Harga:</b> Rp 28.000.000</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-success pilih-hewan" data-jenis="Sapi Limousin" data-umur="4 Tahun"
                        data-berat="320 Kg" data-harga="28000000">Pilih Hewan Ini</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sapi PO -->
    <div class="modal fade" id="modalSapi3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Sapi PO</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/hewan/sapi.jpeg') }}"class="img-fluid rounded mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Jenis:</b> Sapi PO</li>
                        <li class="list-group-item"><b>Umur:</b> 3 Tahun</li>
                        <li class="list-group-item"><b>Berat:</b> 280 Kg</li>
                        <li class="list-group-item"><b>Warna:</b> Cokelat</li>
                        <li class="list-group-item"><b>Harga:</b> Rp 25.000.000</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-success pilih-hewan" data-jenis="Sapi PO" data-umur="3 Tahun"
                        data-berat="280 Kg" data-harga="25000000">Pilih Hewan Ini</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kambing Jawa -->
    <div class="modal fade" id="modalKambing1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kambing Jawa</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/hewan/Kambing-Jawa.jpg') }}" class="img-fluid rounded mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Jenis:</b> Kambing Jawa</li>
                        <li class="list-group-item"><b>Umur:</b> 1 Tahun</li>
                        <li class="list-group-item"><b>Berat:</b> 35 Kg</li>
                        <li class="list-group-item"><b>Warna:</b> Putih</li>
                        <li class="list-group-item"><b>Harga:</b> Rp 3.500.000</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-success pilih-hewan" data-jenis="Kambing Jawa" data-umur="1 Tahun"
                        data-berat="35 Kg" data-harga="3500000">Pilih Hewan Ini</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kambing Etawa -->
    <div class="modal fade" id="modalKambing2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kambing Etawa</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/hewan/kambing-etawa.webp') }}" class="img-fluid rounded mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Jenis:</b> Kambing Etawa</li>
                        <li class="list-group-item"><b>Umur:</b> 1.5 Tahun</li>
                        <li class="list-group-item"><b>Berat:</b> 40 Kg</li>
                        <li class="list-group-item"><b>Warna:</b> Hitam Putih</li>
                        <li class="list-group-item"><b>Harga:</b> Rp 4.000.000</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-success pilih-hewan" data-jenis="Kambing Etawa" data-umur="1.5 Tahun"
                        data-berat="40 Kg" data-harga="4000000">Pilih Hewan Ini</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Kambing Boer -->
    <div class="modal fade" id="modalKambing3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Kambing Boer</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('assets/images/hewan/wedhus-Boer.jpg') }}"class="img-fluid rounded mb-3">
                    <ul class="list-group">
                        <li class="list-group-item"><b>Jenis:</b> Kambing Boer</li>
                        <li class="list-group-item"><b>Umur:</b> 2 Tahun</li>
                        <li class="list-group-item"><b>Berat:</b> 50 Kg</li>
                        <li class="list-group-item"><b>Warna:</b> Cokelat Putih</li>
                        <li class="list-group-item"><b>Harga:</b> Rp 4.500.000</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button class="btn btn-success pilih-hewan" data-jenis="Kambing Boer" data-umur="2 Tahun"
                        data-berat="50 Kg" data-harga="4500000">Pilih Hewan Ini</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
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

        <div class="col-md-6">
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
    </div>
    <script>
        function hitungTotal() {
            let total = 0;
            document.querySelectorAll('#hewanTerpilih tr').forEach(row => {
                const subtotalText = row.querySelector('.subtotal').innerText.replace(/[Rp\s.]/g, '');
                total += parseInt(subtotalText) || 0;
            });
            document.getElementById('totalHarga').innerText = "Rp " + total.toLocaleString();
        }


        document.querySelectorAll('.pilih-hewan').forEach(btn => {
            btn.addEventListener('click', function() {
                const jenis = this.dataset.jenis;
                const umur = this.dataset.umur;
                const berat = this.dataset.berat;
                const harga = parseInt(this.dataset.harga);


                let existingRow = document.querySelector(`#hewanTerpilih tr[data-jenis="${jenis}"]`);


                if (existingRow) {
                    let jumlahInput = existingRow.querySelector('.jumlah');
                    jumlahInput.value = parseInt(jumlahInput.value) + 1;
                    jumlahInput.dispatchEvent(new Event('change'));
                } else {
                    const row = document.createElement('tr');
                    row.setAttribute('data-jenis', jenis);
                    row.innerHTML = `
                    <td>${jenis}</td>
                    <td>${umur}</td>
                    <td>${berat}</td>
                    <td>Rp ${harga.toLocaleString()}</td>
                    <td><input type="number" class="form-control form-control-sm jumlah" value="1" min="1" style="width:70px"></td>
                    <td class="subtotal">Rp ${harga.toLocaleString()}</td>
                    <td><button type="button" class="btn btn-sm btn-danger hapus">Hapus</button></td>
`;
                    document.getElementById('hewanTerpilih').appendChild(row);


                    row.querySelector('.jumlah').addEventListener('change', function() {
                        const jumlah = parseInt(this.value);
                        const subtotal = harga * jumlah;
                        row.querySelector('.subtotal').innerText = "Rp " + subtotal
                            .toLocaleString();
                        hitungTotal();
                    });


                    row.querySelector('.hapus').addEventListener('click', function() {
                        row.remove();
                        hitungTotal();
                    });
                }
                hitungTotal();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Event tombol Daftar Qurban
            var btnDaftar = document.getElementById('btnDaftarQurban');
            if (btnDaftar) {
                btnDaftar.addEventListener('click', function(e) {
                    e.preventDefault();
                    var modal = new bootstrap.Modal(document.getElementById('metodePembayaranModal'));
                    modal.show();
                });
            }
            // Event tombol Bayar di modal
            var btnBayar = document.getElementById('btnBayar');
            if (btnBayar) {
                btnBayar.addEventListener('click', function() {
                    var modal = bootstrap.Modal.getInstance(document.getElementById(
                        'metodePembayaranModal'));
                    modal.hide();
                    document.getElementById('buktiBayarCard').style.display = "block";
                    setTimeout(function() {
                        document.getElementById('buktiBayarCard').scrollIntoView({
                            behavior: 'smooth'
                        });
                    }, 300);
                });
            }
        });

        function isiFormQurban(jenis, harga) {
            // Scroll ke form pendaftaran qurban
            document.getElementById('formQurban').scrollIntoView({
                behavior: 'smooth'
            });
            // Isi jenis hewan dan harga di form
            document.getElementById('jenisHewanInput').value = jenis;
            document.getElementById('hargaHewanInput').value = harga;
            document.getElementById('qtyHewanInput').value = 1;
            document.getElementById('totalHargaQurban').innerText = 'Rp ' + harga.toLocaleString('id-ID');
        }

        function updateTotalHargaQurban() {
            var harga = parseInt(document.getElementById('hargaHewanInput').value) || 0;
            var qty = parseInt(document.getElementById('qtyHewanInput').value) || 1;
            var total = harga * qty;
            document.getElementById('totalHargaQurban').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }
    </script>
@endsection
