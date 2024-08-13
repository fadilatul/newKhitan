@extends('layouts.app')

@section('title')
Terapi
@endsection

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(Auth::user()->name == 'DokterGigi' || Auth::user()->name == 'DokterUmum')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Terapi</h4>

                        <!-- center modal -->
                        <div>
                            <button id="downloadExcel" class="btn btn-info waves-effect waves-light mb-4">
                                <i class="fa fa-print"> </i>
                            </button>
                            <a href="{{ route('terapi.create') }}">
                                <button type="button" class="btn btn-primary mb-4" style="margin-bottom: 1rem;">
                                    <i class="mdi mdi-plus me-1"></i>Tambah Terapi
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body" id="cetak">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Type</th>
                                        <th>Terapi</th>
                                        <th>Obat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Auth::user()->name == 'DokterGigi')
                                    @foreach ($terapigigi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{$item->obat }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-primary shadow btn-xs sharp me-1" title="Edit"
                                                    href="{{ route('terapi.edit', ['id' => $item->id]) }}">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <a class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $item->id }}">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{ $item->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Hapus Data</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <i class="fa fa-trash"></i><br> Anda yakin ingin
                                                                menghapus data ini?<br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light"
                                                                    data-bs-dismiss="modal">Batalkan</button>
                                                                <form action="{{ route('terapi.delete', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger shadow">
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

                                    @elseif(Auth::user()->name == 'DokterUmum')
                                    @foreach ($terapiumum as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->obat }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a class="btn btn-primary shadow btn-xs sharp me-1" title="Edit"
                                                    href="{{ route('terapi.edit', ['id' => $item->id]) }}">
                                                    <i class="fa fa-pencil-alt"></i>
                                                </a>
                                                <a class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $item->id }}">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{ $item->id }}"
                                                    tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Hapus Data</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <i class="fa fa-trash"></i><br> Anda yakin ingin
                                                                menghapus data ini?<br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light"
                                                                    data-bs-dismiss="modal">Batalkan</button>
                                                                <form action="{{ route('terapi.delete', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger shadow">
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
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection