@extends('layouts.app')

@section('title', 'Halaman Utama')

@section('content')
    <div class="content-body">
        @include('component.message')
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row justify-content-center">
                <!-- Jumlah Pasien -->
                 <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary h-100 py-2 shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1 text-xs">
                                        Jumlah Pasien</div>
                                    <div class="h5 font-weight-bold mb-0 text-gray-800">{{ $jmlpasien }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pasien Khitan -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success h-100 py-2 shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-success text-uppercase mb-1 text-xs">
                                        Pasien Khitan</div>
                                    <div class="h5 font-weight-bold mb-0 text-gray-800">{{ $jmlkhitan }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Belum Diperiksa -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning h-100 py-2 shadow">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-warning text-uppercase mb-1 text-xs">
                                        Belum Diperiksa</div>
                                    <div class="h5 font-weight-bold mb-0 text-gray-800">{{ $belumDiperiksa }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baris Konten Bawah -->
            <div class="row justify-content-center mb-4">
                <!-- Kolom 1 - Jumlah Pasien -->
                <div class="col-xl-12 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-header d-flex align-items-center justify-content-between flex-row py-3">
                            <h6 class="font-weight-bold text-primary m-0">Data Jumlah Pasien</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="patientChart" width="400" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kolom 2 - Jumlah Pasien Khitan -->
                <div class="col-xl-12 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-header d-flex align-items-center justify-content-between flex-row py-3">
                            <h6 class="font-weight-bold text-primary m-0">Jumlah Pasien Khitan</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie pb-2 pt-4">
                                <canvas id="khitanChart" width="400" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tambahkan script Chart.js di sini --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data for the charts
        const patientData = @json($patientData);
        const khitanData = @json($khitanData);

        // Configuring the Patient Chart
        const ctx1 = document.getElementById('patientChart').getContext('2d');
        const patientChart = new Chart(ctx1, {
            type: 'line', // or 'bar'
            data: {
                labels: patientData.labels, // ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4']
                datasets: [{
                    label: 'Jumlah Pasien',
                    data: patientData.data, // [250, 300, 200, 350]
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100 // Set maximum value for y-axis
                    }
                }
            }
        });

        // Configuring the Khitan Chart
        const ctx2 = document.getElementById('khitanChart').getContext('2d');
        const khitanChart = new Chart(ctx2, {
            type: 'line', // or 'bar'
            data: {
                labels: khitanData.labels, // ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4']
                datasets: [{
                    label: 'Jumlah Pasien Khitan',
                    data: khitanData.data, // [100, 120, 110, 130]
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100 // Set maximum value for y-axis
                    }
                }
            }
        });
    </script>
@endsection
