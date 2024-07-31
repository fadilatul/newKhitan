@extends('layouts.app')

@section('title', 'Data Grafik')

@section('content')
    <div class="content-body">
        <div class="container">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pasien Terdaftar</h4>
                    <div>
                        {{-- <button class="btn btn-info waves-effect waves-light mb-4" onclick="printDiv('cetak')">
                        <i class="fa fa-print"></i> Cetak
                    </button> --}}
                    </div>
                </div>
                <div class="card-body" id="cetak">
                    <div class="button-group mb-4">
                        <button class="btn btn-primary" onclick="showTable('pendaftaran')">Riwayat Pendaftaran
                            Pasien</button>
                        <button class="btn btn-secondary" onclick="showTable('khitan')">Riwayat Pendaftaran Khitan</button>
                    </div>

                    <div class="table-responsive riwayat-table" id="pendaftaran" style="display: none;">
                        <h5>Riwayat Pendaftaran Pasien</h5>
                        <table id="example1" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Usia</th>
                                    <th style="width: 134px">Alamat</th>
                                    <th>Nomer HP</th>
                                    <th>Kategori</th>
                                    <th>Rekam Medik</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPriksa as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->usia }} Th</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->nomer_hp }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="{{ route('rekam_umum', $item->id) }}"
                                                        class="btn btn-success mx-4">
                                                        <i class="fas fa-clipboard"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive riwayat-table" id="khitan" style="display: none;">
                        <h5>Riwayat Pendaftaran Khitan</h5>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Jam</th>
                                    <th>Paket</th>
                                    <th>Tempat</th>
                                    <th style="width: 134px">Alamat</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($khitanss as $khitans)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $khitans->name }}</td>
                                        <td>{{ $khitans->tanggal }}</td>
                                        <td>{{ $khitans->jam }}</td>
                                        <td>{{ $khitans->jenis_paket }}</td>
                                        <td>{{ $khitans->tempat }}</td>
                                        <td>{{ $khitans->alamat }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTable(tableId) {
            // Hide all tables
            var tables = document.getElementsByClassName('riwayat-table');
            for (var i = 0; i < tables.length; i++) {
                tables[i].style.display = 'none';
            }
            // Show the selected table
            document.getElementById(tableId).style.display = 'block';
        }
    </script>
@endsection
