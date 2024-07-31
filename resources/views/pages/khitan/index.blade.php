@extends('layouts.app')
@section('title')
    Data Khitan
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Khitan</h4>
                            <div>
                                {{-- <button id="downloadExcel" class="btn btn-info waves-effect waves-light mb-4"><i
                                        class="fa fa-print"> </i></button> --}}

                                <a href="{{ route('tambah_khitan') }}"><button type="button" class="btn btn-primary mb-4"
                                        style="margin-bottom: 1rem;"><i class="mdi mdi-plus me-1"></i>Tambah
                                        Khitan</button></a>
                            </div>
                        </div>
                        <div class="card-body" id="cetak">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Jenis Paket</th>
                                            <th>Tempat Khitan</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($khitan as $khitans)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $khitans->name }}</td>
                                                <td>{{ $khitans->tanggal }}</td>
                                                <td>{{ $khitans->jam }}</td>
                                                <td>{{ $khitans->jenis_paket }}</td>
                                                <td>{{ $khitans->tempat }}</td>
                                                <td>{{ $khitans->alamat }}</td>
                                                <td>
                                                    @if ($khitans->status == 'belum')
                                                        <button class="btn btn-warning">{{ $khitans->status }}</button>
                                                    @else
                                                        <button class="btn btn-success">{{ $khitans->status }}</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-success shadow btn-xs sharp me-1" title="Detail"
                                                            href="{{ route('detail_khitan', ['id' => $khitans->id]) }}"><i
                                                                class="fa fa-file-alt"></i></a>
                                                        <a class="btn btn-primary shadow btn-xs sharp me-1" title="Edit"
                                                            href="{{ route('edit_khitan', ['id' => $khitans->id]) }}">
                                                            <i class="fa fa-pencil-alt"></i>
                                                        </a>
                                                        <form action="{{ route('delete', $khitans->id) }}" method="POST"
                                                            id="delete-form-{{ $khitans->id }}" class="d-inline">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn btn-danger shadow btn-xs sharp me-1"
                                                                data-id="{{ $khitans->id }}"><i
                                                                    class="bi bi-trash"></i></button>
                                                        </form>
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

        // document.getElementById('downloadExcel').addEventListener('click', function() {
        //     fetch('/export-excel')
        //         .then(response => response.blob())
        //         .then(blob => {
        //             const url = window.URL.createObjectURL(blob);
        //             const a = document.createElement('a');
        //             a.href = url;
        //             a.download = 'khitan.xlsx';
        //             document.body.appendChild(a);
        //             a.click();
        //             a.remove();
        //         });
        // });
    </script>
@endpush
