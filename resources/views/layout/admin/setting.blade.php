@extends('layout.admin.app')

@section('content')
<div class="container mt-4">

    <h3 class="fw-bold mb-4">Pengaturan Sistem Qurban</h3>

    <!-- Identitas Masjid -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white fw-bold">
            Identitas Masjid / Panitia
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Masjid / Panitia</label>
                    <input type="text" class="form-control" placeholder="Musala Al-Barokah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="2" placeholder="Suruhan, Sirnoboyo, Kec. Pacitan, Kabupaten Pacitan, Jawa Timur 63518"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kontak</label>
                    <input type="text" class="form-control" placeholder="0812xxxxxxx / Alba@gmail.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input type="file" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Pengaturan Qurban -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-success text-white fw-bold">
            Pengaturan Qurban
        </div>
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Harga Sapi per Ekor</label>
                        <input type="number" class="form-control" placeholder="17000000">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Harga Kambing per Ekor</label>
                        <input type="number" class="form-control" placeholder="3000000">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Maksimal Peserta per Sapi</label>
                    <input type="number" class="form-control" placeholder="7">
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Mulai Pendaftaran</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Akhir Pendaftaran</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Pelaksanaan Qurban</label>
                    <input type="date" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>

    <!-- Pengaturan Teknis -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-dark text-white fw-bold">
            Pengaturan Teknis
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Email Notifikasi</label>
                    <input type="email" class="form-control" placeholder="notifikasi@masjid.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Hak Akses Default User Baru</label>
                    <select class="form-select">
                        <option value="peserta">Peserta</option>
                        <option value="panitia">Panitia</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-danger">Backup Database</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
