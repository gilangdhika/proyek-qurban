@extends('layout.frontend.app')

@section('content')
    <header class="masthead bg-dark"
        style="background: url('{{ asset('assets/images/backgrounds/background sapi.jpg') }}') center/cover no-repeat; min-height: 100vh; filter: brightness(72%)">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <section id="home">
                        <h1 class="text-white font-weight-bold">Selamat Datang Di Quralba </h1>
                        <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Daftar Qurban Lebih Mudah, Pantau Proses, Distribusi Transparan
                    </p>
                    <a class="btn btn-primary btn-xl" href="#tentang">Temukan Lebih Banyak</a>
                </div>
            </div>
        </div>
        </section>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="tentang">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Tentang Quralba</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">
                        Quralba adalah aplikasi web untuk memudahkan pendaftaran, pemantauan, dan distribusi kurban di
                        Musala Alba.<br><br>
                        Dengan Quralba, Shohibul Kurban bisa daftar Kurban secara online, memantau status hewan, dan
                        menerima daging dengan sistem QR Code tanpa harus datang langsung ke musala.
                        Semua proses jadi lebih mudah, transparan, dan efisien untuk peserta maupun panitia.
                        <br><br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="layanan">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Layanan</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-clipboard-check fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Pendaftaran Online</h3>
                        <p class="text-muted mb-0">Peserta bisa daftar dan memilih hewan kurban secara online, tanpa harus
                            datang langsung ke musala</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-eye fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Pantau Hewan</h3>
                        <p class="text-muted mb-0">Shohibul kurban bisa memantau status hewan mereka mulai dari
                            penyembelihan, pengemasan, hingga distribusi</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-box-seam fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Pembagian</h3>
                        <p class="text-muted mb-0">Kurir mengantar daging dan menggunakan QR Code unik untuk memastikan
                            daging sampai ke penerima dengan rapi dan terdata</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-graph-up fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Laporan</h3>
                        <p class="text-muted mb-0">Data peserta, status hewan, dan distribusi tercatat rapi sehingga mudah
                            dicek kembali oleh panitia maupun peserta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <section id="carawork" class="py-5 bg-light">

                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="fw-bold text-dark">Cara Kerja Qurban di Quralba</span></h2>
                        <p class="text-muted">Ikuti langkah mudah berikut untuk berqurban bersama kami.</p>
                    </div>

                    <div class="row g-4">
                        <!-- Step 1 -->
                        <div class="col-md-3">
                            <div class="card h-100 shadow-sm text-center border-0">
                                <div class="card-body">
                                    <div class="display-4 text-success mb-3">
                                        <i class="bi bi-pencil-square"></i>
                                    </div>
                                    <h5 class="card-title text-dark">1. Daftar Online</h5>
                                    <p class="card-text text-muted">
                                        Pilih hewan qurban dan isi data pendaftaran melalui sistem.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="col-md-3">
                            <div class="card h-100 shadow-sm text-center border-0">
                                <div class="card-body">
                                    <div class="display-4 text-primary mb-3">
                                        <i class="bi bi-credit-card"></i>
                                    </div>
                                    <h5 class="card-title text-dark">2. Pembayaran</h5>
                                    <p class="card-text text-muted">
                                        Lakukan pembayaran sesuai pilihan hewan atau patungan qurban.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 3 -->
                        <div class="col-md-3">
                            <div class="card h-100 shadow-sm text-center border-0">
                                <div class="card-body">
                                    <div class="display-4 text-warning mb-3">
                                        <i class="bi bi-scissors"></i>
                                    </div>
                                    <h5 class="card-title text-dark">3. Proses Qurban</h5>
                                    <p class="card-text text-muted">
                                        Panitia menyembelih, mengolah, dan menyiapkan hewan qurban.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Step 4 -->
                        <div class="col-md-3">
                            <div class="card h-100 shadow-sm text-center border-0">
                                <div class="card-body">
                                    <div class="display-4 text-danger mb-3">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                    <h5 class="card-title text-dark">4. Distribusi</h5>
                                    <p class="card-text text-muted">
                                        Daging qurban dibagikan kepada penerima dengan sistem qr code secara merata.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action-->
            <div class="container px-4 px-lg-5 text-center">
                {{-- <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a> --}}
            </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="login">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Login Disini</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5"></p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="example@gmail.com"
                                data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email harus diisi.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="password" type="password" placeholder="Isi password anda"
                                data-sb-validations="required" />
                            <label for="password">Password</label>
                            <div class="invalid-feedback" data-sb-feedback="password:required">Password harus diisi.
                            </div>
                        </div>
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Pesan Error!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton"
                                type="submit">Login</button></div>
                    </form>
                    <div class="mt-3 text-center">
                        <span>Belum punya akun? <a href="/register">Daftar di sini</a></span>
                    </div>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <br>
                    <span>Hubungi Saya</span>
                    <div>gil: +62 812-3456-7890</div>
                    <div></div>
                </div>
            </div>
        </div>
    </section>
@endsection
