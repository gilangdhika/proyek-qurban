@extends('layout.admin.app')

@section('content')
    <div class="container-fluid">
        <h2 class="fw-bold mb-4">Daftar Hewan Qurban</h2>

        <div class="row g-4">
            {{-- Card Hewan Sapi --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/sapi.jpeg') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Sapi">
                    <div class="card-body">
                        <h5 class="card-title">Sapi</h5>
                        <p class="card-text">
                            Berat: 250 kg <br>
                            Harga: <strong>Rp 20.000.000</strong>
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <span class="badge bg-success">Tersedia</span>
                        <div>
                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalEditHewan">Edit</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Hewan Kambing --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/images.kambing.jpeg') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Kambing">
                    <div class="card-body">
                        <h5 class="card-title">Kambing</h5>
                        <p class="card-text">
                            Berat: 35 kg <br>
                            Harga: <strong>Rp 3.500.000</strong>
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <span class="badge bg-success">Tersedia</span>
                        <div>
                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalEditHewan">Edit</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Hewan Patungan Sapi --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/Sapi Premium_Patungan.png') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Patungan Sapi">
                    <div class="card-body">
                        <h5 class="card-title">Patungan Sapi</h5>
                        <p class="card-text">
                            Kuota: 7 orang <br>
                            Harga per orang: <strong>Rp 2.850.000</strong>
                        </p>
                        <div class="mb-2">
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 71%;"
                                    aria-valuenow="5" aria-valuemin="0" aria-valuemax="7">5/7</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <span class="badge bg-warning text-dark">Hampir Penuh</span>
                        <div>
                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalEditHewan">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Hewan Qurban -->
    <div class="modal fade" id="modalEditHewan" tabindex="-1" aria-labelledby="modalEditHewanLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditHewanLabel">Edit Hewan Qurban</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editJenisHewan" class="form-label">Jenis Hewan</label>
                            <input type="text" class="form-control" id="editJenisHewan" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="editBeratHewan" class="form-label">Berat (kg)</label>
                            <input type="number" class="form-control" id="editBeratHewan" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="editHargaHewan" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="editHargaHewan" value="" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
