@extends('layouts.app')
@section('title')
Rekam Medis
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Pasien</h4>
                    </div>
                    <div class="card-body" id="cetak">
                        <ul>
                            <li>Nama Lengkap :<span class="fw-bold"> {{ $pasien->name }}</span></li>
                            <li>Tempat, Tanggal Lahir:<span class="fw-bold"> {{ $pasien->tempat }}, {{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->format('d-m-Y') }}</span></li>
                            <li>Usia : <span class="fw-bold"> {{ $pasien->usia }}</span></li>
                            <li>Jenis Kelamin : <span class="fw-bold"> {{ $pasien->jenis_kelamin }}</span></li>
                            <li>Nama Orang Tua : <span class="fw-bold"> {{$pasien->name_orangtua}}</span></li>
                            <li>Alamat : <span class="fw-bold"> {{ $pasien->alamat }}</span></li>
                            <li>Alergi Obat: <span class="fw-bold"> {{ $pasien->alergi_obat }}</span></li>

                            <li>Tinggi Badan: <span class="fw-bold"> {{ $pasien->tinggi_badan }}</span></li>
                            <li>Berat Badan: <span class="fw-bold"> {{ $pasien->berat_badan }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Rekam Medis</h4>

                        <!-- center modal -->
                        {{-- <div>
                                    <button class="btn btn-info waves-effect waves-light mb-4"
                                        onclick="printDiv('cetak')"><i class="fa fa-print"> </i></button>

                                </div> --}}
                    </div>
                    <div class="card-body" id="cetak">
                        <div class="table-responsive">


                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>

                                        <th>No RM</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Poli</th>
                                        <th>Tekanan Darah</th>
                                        <th>Suhu Tubuh</th>
                                        <th>Gejala</th>
                                        <th>Diagnosa</th>
                                        <th>Terapi</th>
                                        <th>Biaya</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rekamUmum as $rekam)
                                    <tr>

                                        <td>{{ $rekam->no_rm }}
                                        <td>{{ \Carbon\Carbon::parse($rekam->created_at)->format('l, d-m-Y H:i:s') }}</td>
                                        <td>{{ $rekam->poli }}</td>
                                        <td>{{ $rekam->tekanan_darah }} mm Hg</td>
                                        <td>{{ $rekam->suhu_tubuh }} Celcius</td>
                                        <td>{{ $rekam->gejala->name ?? 'Belum Dipriksa' }}</td>
                                        <td>{{ $rekam->diagnosa->name ?? 'Belum Dipriksa' }}</td>
                                        <td>{{ $rekam->terapi->name ?? 'Belum Dipriksa' }}</td>

                                        <td>Rp {{ number_format($rekam->biaya, 0, ',', '.') }}</td>
                                        <td>
                                            <div class="d-flex">

                                                <a class="btn btn-primary shadow btn-xs sharp me-1" title="Edit" href="{{ route('edit_rekam', $pasien_id) }}"><i class="fa fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash" data-bs-toggle="modal" data-bs-target=".delete" onclick="hapus({{ $rekam->id }})"></i></a>
                                                <div class="modal fade delete" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Hapus Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-center"><i class="fa fa-trash"></i><br> Anda yakin
                                                                ingin
                                                                menghapus data ini?<br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Batalkan</button>
                                                                <form id="hapus" method="POST">
                                                                    @csrf
                                                                    @method('post')
                                                                    <button type="submit" class="btn btn-danger shadow">
                                                                        Ya, Hapus Data!
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
    <!-- /.container-fluid -->
    <script>
        function hapus(id) {
            $('#hapus').attr('action', "{{ url('rekam-umum/delete') }}" + "/" + id)

        }
    </script>
    @endsection