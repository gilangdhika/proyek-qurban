@extends('layout.admin.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-4">Manajemen User Quralba</h5>
            <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahUser">+ Tambah
                User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No HP</th>
                            <th>Role</th>
                            <th>Tugas (Panitia)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->name ?? '-' }}</td>
                                <td>{{ $u->email ?? '-' }}</td>
                                <td>{{ $u->phone ?? '-' }}</td>
                                <td>
                                    @php $role = $u->role ?? '-' @endphp
                                    @if ($role === 'admin')
                                        <span class="badge bg-primary">Admin</span>
                                    @elseif($role === 'panitia')
                                        <span class="badge bg-warning text-dark">Panitia</span>
                                    @elseif($role === 'shohibul')
                                        <span class="badge bg-success">Shohibul</span>
                                    @else
                                        <span class="badge bg-light text-dark">{{ ucfirst($role) }}</span>
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $tugas = $u->tugas ?? null;
                                        $role = $u->role ?? null;
                                    @endphp
                                    @if ($role === 'panitia')
                                        {{ $tugas ?? '-' }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    <!-- Ubah tombol Edit agar buka modal -->
                                    <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modalEditUser">Edit</a>
                                    <form action="/admin/user/{{ $u->id }}" method="post" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus user?')">Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>1</td>
                            <td>Ahmad Fauzi</td>
                            <td>ahmad@example.com</td>
                            <td>081234567890</td>
                            <td><span class="badge bg-primary">Admin</span></td>
                            <td>-</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditUser">Edit</a>
                                <form action="/admin/user/1" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus user?')">Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>siti@example.com</td>
                            <td>081223344556</td>
                            <td><span class="badge bg-warning text-dark">Panitia</span></td>
                            <td>Pengumpulan Dana</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditUser">Edit</a>
                                <form action="/admin/user/2" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus user?')">Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>budi@example.com</td>
                            <td>081298765432</td>
                            <td><span class="badge bg-warning text-dark">Panitia</span></td>
                            <td>Kurir</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditUser">Edit</a>
                                <form action="/admin/user/3" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus user?')">Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>H. Karim</td>
                            <td>karim@example.com</td>
                            <td>081233344455</td>
                            <td><span class="badge bg-success">Shohibul</span></td>
                            <td>-</td>
                            <td>
                                <!-- Ubah tombol Edit agar buka modal -->
                                <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalEditUser">Edit</a>
                                <form action="/admin/user/4" method="post" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus user?')">Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah User -->
    <div class="modal fade" id="modalTambahUser" tabindex="-1" aria-labelledby="modalTambahUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahUserLabel">Tambah User Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div> --}}

                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" required>
                                <option value="user">User</option>
                                <option value="panitia">Panitia</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Tugas (Panitia)</label>
                            <select class="form-select" id="role" required>
                                <option value="panitia">Kurir</option>
                                <option value="panitia">Pengolah Daging</option>
                                <option value="panitia">Pengumpulan Dana</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit User -->
    <div class="modal fade" id="modalEditUser" tabindex="-1" aria-labelledby="modalEditUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditUserLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="editName" value="Ahmad Fauzi" required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" value="name@example.com"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="editRole" class="form-label">Role</label>
                            <select class="form-select" id="editRole" required>
                                <option value="user">User</option>
                                <option value="panitia" selected>Panitia</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Tugas (Panitia)</label>
                            <select class="form-select" id="role" required>
                                <option value="panitia">Kurir</option>
                                <option value="panitia">Pengolah Daging</option>
                                <option value="panitia">Pengumpulan Dana</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
