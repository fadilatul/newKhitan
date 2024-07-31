@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Pasien Periksa Gigi</h4>
                            <div>
                                {{-- <button class="btn btn-info waves-effect waves-light mb-4" onclick="printDiv('cetak')">
                                <i class="fa fa-print"></i> Cetak
                            </button> --}}
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
                                        @foreach ($data_gigi as $item)
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
                                                            <a href="{{ route('rekam_gigi', $item->id) }}"
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
            $('#hapus').attr('action', "{{ url('rekam-medis/delete') }}" + "/" + id)

        }
    </script>
    {{-- <script>
        $(document).on('click', '#btn-delete', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');

            Swal.fire({
                title: 'Apakah Kamu Yakin Untuk Menghapus Data Tersebut?',
                text: "Kamu tidak bisa mengembalikan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus itu!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        });
    </script> --}}
@endpush
