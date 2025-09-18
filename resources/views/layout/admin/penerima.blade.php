@extends('layout.admin.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-4">Daftar Penerima</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                + Tambah Penerima
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ahmad Fauzi</td>
                            <td>081234567890</td>
                            <td>RT 2, RW 1, Dusun Suruhan, Desa Sirnoboyo</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditPenerima">Edit</a>
                                <form action="/admin/penerima/1" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>081223344556</td>
                            <td>RT 4, RW 1, Dusun Suruhan, Desa Sirnoboyo</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditPenerima">Edit</a>
                                <form action="/admin/penerima/2" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>081298765432</td>
                            <td>RT 2, RW 3, Dusun Ngemplak, Desa Sirnoboyo</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditPenerima">Edit</a>
                                <form action="/admin/penerima/3" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>H. Karim</td>
                            <td>081233344455</td>
                            <td>RT 1, RW 1, Dusun Krajan, Desa Sirnoboyo</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditPenerima">Edit</a>
                                <form action="/admin/penerima/4" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penerima Baru</h5>
                </div>
                <div class="modal-body">
                    <form action="/admin/user/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="Tugas (apabila panitia)" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="tugas" name="tugas" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit Penerima -->
    <div class="modal fade" id="modalEditPenerima" tabindex="-1" aria-labelledby="modalEditPenerimaLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditPenerimaLabel">Edit Penerima</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editNamaPenerima" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="editNamaPenerima" value="Siti Nurhaliza"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editAlamatPenerima" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="editAlamatPenerima"
                                value="RT 4, RW 1, Dusun Suruhan, Desa Sirnoboyo" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="fw-bold text-center mb-4">QR Code Penerima</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card shadow-sm p-4">
                    <h5 class="mb-3">Tunjukkan QR Code ini ke penerima</h5>
                    <div class="d-flex justify-content-center">
                        {!! QrCode::size(200)->generate('https://quralba.com/distribusi/validasi') !!}
                    </div>
                    <p class="mt-3 text-muted">
                        Scan QR Code ini untuk validasi penerimaan daging qurban
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
