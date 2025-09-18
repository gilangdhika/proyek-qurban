@extends('layout.admin.app')

@section('content')
    <div class="row">
        {{-- Statistik Pendaftaran Qurban --}}
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Statistik Pendaftaran Qurban</h5>
                        </div>
                        <div>
                            <select class="form-select" id="tahunChart">
                                <option value="2025">Tahun 2025</option>

                            </select>
                        </div>
                    </div>
                    <div id="chart"></div> {{-- Chart jumlah peserta per jenis hewan --}}
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="row">
                {{-- Komposisi Hewan Qurban --}}
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Jumlah Hewan Qurban</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3"> 13 Hewan</h4>
                                    <p class="text-dark fs-3 mb-2">Kambing: 9 | Sapi: 4</p>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-center">
                                        <div id="breakup"></div> {{-- Pie chart persentase hewan --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Status Pembayaran Peserta --}}
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-9 fw-semibold">Status Pembayaran Peserta</h5>
                            <h4 class="fw-semibold mb-3">Lunas: 85% | Belum Lunas: 15%</h4>
                            <div id="earning"></div> {{-- Grafik status pembayaran --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Aktivitas Terbaru --}}
    <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="mb-4">
                        <h5 class="card-title fw-semibold">Aktivitas Terbaru</h5>
                    </div>
                    <ul class="timeline-widget mb-0 position-relative mb-n5">
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">09:00</div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">Peserta A mendaftar kurban kambing</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">Peserta B melakukan pembayaran</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">10:00</div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">Panitia menambahkan data penerima</div>
                        </li>
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">11:00</div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">Distribusi hewan qurban dimulai</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Riwayat Transaksi Pembayaran --}}
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="card-title fw-semibold mb-4">Riwayat Transaksi Pembayaran</h5>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Peserta</th>
                                    <th>Tanggal</th>
                                    <th>Nominal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ahmad Fauzi</td>
                                    <td>2025-06-01</td>
                                    <td>Rp 2.000.000</td>
                                    <td><span class="badge bg-success">Lunas</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Siti Aminah</td>
                                    <td>2025-05-28</td>
                                    <td>Rp 3.500.000</td>
                                    <td><span class="badge bg-warning text-dark">Belum Lunas</span></td>
                                </tr>
                                <!-- Tambahkan baris lain sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const dataStatistik = {
            2025: {
                series: [{
                        name: 'Kambing',
                        data: [12, 18, 25]
                    },
                    {
                        name: 'Sapi',
                        data: [4, 6, 8]
                    }
                ],
                categories: ['April', 'Mei', 'Juni']
            },
        };

        function renderChart(tahun) {
            const chartOptions = {
                chart: {
                    type: 'bar',
                    height: 300,
                    toolbar: {
                        show: false
                    },
                    responsive: [{
                        breakpoint: 600,
                        options: {
                            chart: {
                                height: 200
                            }
                        }
                    }]
                },
                series: dataStatistik[tahun].series,
                xaxis: {
                    categories: dataStatistik[tahun].categories
                },
                colors: ['#28a745', '#ff9800'],
                legend: {
                    position: 'top'
                }
            };
            if (window.statistikChart) window.statistikChart.destroy();
            window.statistikChart = new ApexCharts(document.querySelector("#chart"), chartOptions);
            window.statistikChart.render();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const selectTahun = document.querySelector('.form-select');
            renderChart(selectTahun.value);
            selectTahun.addEventListener('change', function() {
                renderChart(this.value);
            });

            const pieOptions = {
                series: [9, 4],
                chart: {
                    type: 'donut',
                    height: 200
                },
                labels: ['Kambing', 'Sapi'],
                colors: ['#28a745', '#ff9800']
            };
            new ApexCharts(document.querySelector("#breakup"), pieOptions).render();


            const pembayaranOptions = {
                series: [85, 15],
                chart: {
                    type: 'pie',
                    height: 200
                },
                labels: ['Lunas', 'Belum Lunas'],
                colors: ['#28a745', '#ffc107']
            };
            new ApexCharts(document.querySelector("#earning"), pembayaranOptions).render();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Data dummy per tahun, bisa diganti dari backend
        const dataStatistik = {
            2025: {
                series: [{
                        name: 'Kambing',
                        data: [12, 18, 25]
                    },
                    {
                        name: 'Sapi',
                        data: [4, 6, 8]
                    }
                ],
                categories: ['April', 'Mei', 'Juni']
            },
        };

        function renderChart(tahun) {
            const chartOptions = {
                chart: {
                    type: 'bar',
                    height: 300,
                    toolbar: {
                        show: false
                    },
                    responsive: [{
                        breakpoint: 600,
                        options: {
                            chart: {
                                height: 200
                            }
                        }
                    }]
                },
                series: dataStatistik[tahun].series,
                xaxis: {
                    categories: dataStatistik[tahun].categories
                },
                colors: ['#28a745', '#ff9800'],
                legend: {
                    position: 'top'
                }
            };
            if (window.statistikChart) window.statistikChart.destroy();
            window.statistikChart = new ApexCharts(document.querySelector("#chart"), chartOptions);
            window.statistikChart.render();
        }

        document.addEventListener('DOMContentLoaded', function() {
            const selectTahun = document.getElementById('tahunChart');
            renderChart(selectTahun.value);
            selectTahun.addEventListener('change', function() {
                renderChart(this.value);
            });

            const pieOptions = {
                series: [9, 4],
                chart: {
                    type: 'donut',
                    height: 200
                },
                labels: ['Kambing', 'Sapi'],
                colors: ['#28a745', '#ff9800']
            };
            new ApexCharts(document.querySelector("#breakup"), pieOptions).render();

            const pembayaranOptions = {
                series: [85, 15],
                chart: {
                    type: 'pie',
                    height: 200
                },
                labels: ['Lunas', 'Belum Lunas'],
                colors: ['#28a745', '#ffc107']
            };
            new ApexCharts(document.querySelector("#earning"), pembayaranOptions).render();
        });
    </script>
@endsection
