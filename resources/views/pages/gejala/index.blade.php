@extends('layouts.app')
@section('title')
    Gejala
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Gejala</h4>

                            <!-- center modal -->
                            <div>
                                <button id="downloadExcel" class="btn btn-info waves-effect waves-light mb-4"><i
                                        class="fa fa-print"> </i></button>
                                <a href="{{ route('gejala.create') }}"><button type="button" class="btn btn-primary mb-4"
                                        style="margin-bottom: 1rem;"><i class="mdi mdi-plus me-1"></i>Tambah
                                        Gejala</button></a>
                            </div>
                        </div>
                        <div class="card-body" id="cetak">
                            <div class="table-responsive">


                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Type</th>
                                            <th>Gejala</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gejalas as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a class="btn btn-primary shadow btn-xs sharp me-1" title="Edit"
                                                            href="{{ route('gejala.edit', ['id' => $item->id]) }}"><i
                                                                class="fa fa-pencil-alt"></i></a>

                                                        <a class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"
                                                                data-bs-toggle="modal" data-bs-target=".delete"></i></a>
                                                        <div class="modal fade delete" tabindex="-1" role="dialog"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-sm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Hapus Data</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal">
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-center"><i
                                                                            class="fa fa-trash"></i><br> Anda yakin ingin
                                                                        menghapus data ini?<br>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light"
                                                                            data-bs-dismiss="modal">Batalkan</button>
                                                                        <!-- <a href="/delete-registration"> -->
                                                                        <form
                                                                            action="{{ route('gejala.delete', $item->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-danger shadow"
                                                                                data-id="{{ $item->id }}">
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
    @endsection
    {{-- @push('prepend-script')
    <script>
        $(document).on('click', '#btn-delete', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            Swal.fire({
                title: 'Apakah Kamu Yakin Untuk Menghapus Data Tersebut?',
                text: "Kamu tidak bisa mengembalikan data ini!",
                icon: 'warning',
                showCancelButton: true,
                //confirmButtonColor: '#3085d6',
                //cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus itu!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
    </script> --}}

    {{-- <script>
        document.getElementById('downloadExcel').addEventListener('click', function() {
            fetch('/export-excel')
                .then(response => response.blob())
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;
                    a.download = 'pasien.xlsx';
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                });
        });
    </script>
    @endpush --}}
