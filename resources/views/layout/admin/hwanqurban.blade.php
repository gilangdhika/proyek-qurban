@extends('layout.admin.app')

@section('content')
    <div class="container-fluid">
        <h2 class="fw-bold mb-4">Daftar Hewan Qurban</h2>

        <div class="row g-4">
            {{-- Card Hewan Sapi Madura --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/sapi-madura.jpg') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Sapi Madura">
                    <div class="card-body">
                        <h5 class="card-title">Sapi Madura</h5>
                        <p class="card-text">
                            Berat: 250 kg | Umur: 3 Thn <br>
                            Harga: <strong>Rp 22.000.000</strong>
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
            {{-- Card Hewan Sapi Limousin --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/Sapi-Limosin.jpg') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Sapi Limousin">
                    <div class="card-body">
                        <h5 class="card-title">Sapi Limousin</h5>
                        <p class="card-text">
                            Berat: 320 kg | Umur: 4 Thn <br>
                            Harga: <strong>Rp 28.000.000</strong>
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
            {{-- Card Hewan Sapi PO --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/sapi.jpeg') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Sapi PO">
                    <div class="card-body">
                        <h5 class="card-title">Sapi PO</h5>
                        <p class="card-text">
                            Berat: 280 kg | Umur: 3 Thn <br>
                            Harga: <strong>Rp 25.000.000</strong>
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
            {{-- Card Hewan Kambing Jawa --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/Kambing-Jawa.jpg') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Kambing Jawa">
                    <div class="card-body">
                        <h5 class="card-title">Kambing Jawa</h5>
                        <p class="card-text">
                            Berat: 35 kg | Umur: 1 Thn <br>
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
            {{-- Card Hewan Kambing Etawa --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/images/hewan/kambing-etawa.webp') }}" class="card-img-top object-fit-cover"
                        style="height:220px; width:100%;" alt="Kambing Etawa">
                    <div class="card-body">
                        <h5 class="card-title">Kambing Etawa</h5>
                        <p class="card-text">
                            Berat: 40 kg | Umur: 1.5 Thn <br>
                            Harga: <strong>Rp 4.000.000</strong>
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
            {{-- Card Hewan Kambing Boer --}}
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                   <img src="{{ asset('assets/images/hewan/wedhus-Boer.jpg') }}"
                        class="card-img-top object-fit-cover" style="height:220px; width:100%;" alt="Kambing Boer">
                    <div class="card-body">
                        <h5 class="card-title">Kambing Boer</h5>
                        <p class="card-text">
                            Berat: 50 kg | Umur: 2 Thn <br>
                            Harga: <strong>Rp 4.500.000</strong>
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
                    <img src="{{ asset('assets/images/hewan/Sapi Premium_Patungan.png') }}"
                        class="card-img-top object-fit-cover" style="height:220px; width:100%;" alt="Patungan Sapi">
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
    <div class="modal fade" id="modalEditHewan" tabindex="-1" aria-labelledby="modalEditHewanLabel"
        aria-hidden="true">
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
                            <label for="editHargaHewan" class="form-label">Umur</label>
                            <input type="text" class="form-control" id="editHargaHewan" value="" required>
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
