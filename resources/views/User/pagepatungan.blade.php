@extends('layout.frontend.app')

@section('hide_navbar', true)

@section('content')
    <div class="col-md-5 d-flex flex-column align-items-stretch justify-content-start pt-4" style="height:100vh;">
        <!-- Card Patungan Sapi di samping kanan, memenuhi seluruh ruang kosong -->
        <div class="card shadow-sm h-100 w-100" style="height:100%; min-height:1040px;">
            <img src="{{ asset('assets/images/hewan/Sapi Premium_Patungan.png') }}" class="card-img-top object-fit-cover"
                style="height:400px; width:100%; object-fit:cover;" alt="Patungan Sapi">
            <div class="card-body d-flex flex-column justify-content-between h-100">
                <div>
                    <h2 class="card-title mb-3">Patungan Sapi</h2>
                    <p class="card-text mb-3" style="font-size:1.3rem;">
                        Berat: <strong>350 Kg</strong><br>
                        Umur: <strong>4 Tahun</strong><br>
                        Kuota: <strong>7 orang</strong><br>
                        Harga per orang: <strong>Rp 2.850.000</strong>
                    </p>
                    <div class="progress mb-4" style="height: 32px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%; font-size:1.2rem;"
                            aria-valuenow="4" aria-valuemin="0" aria-valuemax="7">4/7 Terisi</div>
                    </div>
                </div>
                <button class="btn btn-success w-100 mt-4" style="font-size:1.3rem; padding:20px 0;">Pilih
                    Patungan Sapi</button>
            </div>
        </div>
    </div>
@endsection
