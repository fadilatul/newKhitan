@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Riwayat Kedatangan Pasien </h4>

                        <!-- center modal -->
                        <div>
                            <button id="downloadExcel" class="btn btn-info waves-effect waves-light mb-4"><i class="fa fa-print"> </i></button>
                            <a href="{{ route('tambah-data') }}"><button type="button" class="btn btn-primary mb-4" style="margin-bottom: 1rem;"><i class="mdi mdi-plus me-1"></i>Tambah
                                    Pendaftaran</button></a>
                        </div>
                    </div>
                    <div class="card-body" id="cetak">
                        <div class="table-responsive">


                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Usia</th>
                                        <th>Alamat</th>
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
                                                    <a href="{{ route('rekam_medis', $item->id) }}" class="btn btn-success mx-4">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection