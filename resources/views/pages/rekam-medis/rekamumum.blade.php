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
                            <li>Nama Lengkap : {{ $pasien->name }}</li>
                            <li>Tanggal Lahir : {{ $pasien->tanggal_lahir }}</li>
                            <li>Jenis Kelamin : {{ $pasien->jenis_kelamin }}</li>
                            <li>Kategori : {{ $pasien->kategori }}</li>
                            <li>Alamat : {{ $pasien->alamat }}</li>
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
                                        <th>Tanggal Masuk</th>
                                        <th>Poli</th>
                                        <th>Tekanan Darah</th>
                                        <th>Suhu Tubuh</th>
                                        <th>Gejala</th>
                                        <th>Diagnosa</th>
                                        <th>Terapi</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rekamUmum as $rekam)
                                    <tr>

                                        <td>{{ $rekam->created_at }}</td>
                                        <td>{{ $rekam->poli }}</td>
                                        <td>{{ $rekam->tekanan_darah }} mm Hg</td>
                                        <td>{{ $rekam->suhu_tubuh }} Celcius</td>
                                        <td>{{ $rekam->gejala }}</td>
                                        <td>{{ $rekam->diagnosa }}</td>
                                        <td>{{ $rekam->terapi }}</td>
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