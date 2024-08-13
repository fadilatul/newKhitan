@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Pasien Terdaftar</h4>

                    </div>
                    <div class="card-body" id="cetak">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomer Pasien</th>
                                        <th>Name</th>

                                        <th>Alamat</th>
                                        <th>Nomer HP</th>

                                        <th>Rekam Medik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data_umum as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nomor_pendaftaran }}</td>
                                        <td>{{ $item->name }}</td>

                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->nomer_hp }}</td>

                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="{{ route('rekam_umum', $item->id) }}" class="btn btn-success mx-4">
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
</div>
@endsection

@push('prepend-script')
<script>
    function hapus(id) {
        $('#hapus').attr('action', "{{ url('dokter/priksa') }}" + "/" + id)

    }
</script>
@endpush