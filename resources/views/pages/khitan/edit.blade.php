{{-- @extends('layouts.app')
@section('title')
Edit Data Khitan
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <form action="{{ route('khitan_update', ['id' => $khitan->id]) }}" method="POST">
                @csrf
                <!-- <input type="hidden" name="pasien_id" value=""> -->
                <div class="col-xl-12">
                    <div class="custom-accordion">
                        <div class="card">
                            <a href="#personal-data" class="text-dark" data-bs-toggle="collapse">
                                <div class="p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3"> <i class="uil uil-receipt text-primary h2"></i>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">Edit Khitan</h5>
                                            <p class="text-muted text-truncate mb-0">Name, Tanggal, , Jam, Jenis Paket, Alamat</p>
                                        </div>
                                        <div class="flex-shrink-0"> <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                    </div>
                                </div>
                            </a>
                            <div id="personal-data" class="collapse show">
                                <div class="p-4 border-top">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-gender">Status</label>
                                                <select class="form-control" name="status">
                                                    @if ($khitan->status == 'belum')
                                                    <option selected>{{$khitan->status}}</option>
                                                    <option value="selesai">selesai</option>
                                                    @else
                                                    <option selected>{{$khitan->status}}</option>
                                                    <option value="belum">belum</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-nisn">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="name" value="{{$khitan->name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-nik">Tanggal Daftar</label>
                                                <input type="date" class="form-control" name="tanggal" value="{{$khitan->tanggal}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-name">Jam Daftar</label>
                                                <input type="time" class="form-control" name="jam" value="{{$khitan->jam}}">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-gender">Jenis
                                                    Paket</label>
                                                <select class="form-control wide" name="jenis_paket">
                                                    @if ($khitan->jenis_paket == 'paket1')
                                                    <option selected>{{$khitan->jenis_paket}}</option>
                                                    <option value="paket2">Paket 2</option>
                                                    <option value="paket3">Paket 3</option>
                                                    <option value="paket4">Paket 4</option>
                                                    @elseif($khitan->jenis_paket == 'paket2')
                                                    <option selected>{{$khitan->jenis_paket}}</option>
                                                    <option value="paket1">Paket 1</option>
                                                    <option value="paket3">Paket 3</option>
                                                    <option value="paket4">Paket 4</option>
                                                    @elseif($khitan->jenis_paket == 'paket3')
                                                    <option selected>{{$khitan->jenis_paket}}</option>
                                                    <option value="paket1">Paket 1</option>
                                                    <option value="paket2">Paket 2</option>
                                                    <option value="paket4">Paket 4</option>
                                                    @else
                                                    <option selected>{{$khitan->jenis_paket}}</option>
                                                    <option value="paket1">Paket 1</option>
                                                    <option value="paket2">Paket 2</option>
                                                    <option value="paket3">Paket 3</option>
                                                    @endif
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-gender">Tempat</label>
                                                <select class="form-control" name="tempat">
                                                    @if ($khitan->tempat == 'rumah')
                                                    <option selected>{{$khitan->tempat}}</option>
                                                    <option value="klinik">klinik</option>
                                                    @else
                                                    <option selected>{{$khitan->tempat}}</option>
                                                    <option value="rumah">rumah</option>
                                                    @endif
                                                </select>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-nik">Alamat</label>
                                                    <input class="form-control" rows="3" name="alamat" value="{{$khitan->alamat}}"></input>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <div class="text-end mt-2 mt-sm-0">
                            <button type="submit" class="btn btn-primary">Edit Pendaftaran</button>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </form>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')
@section('title', 'Edit Data Khitan')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Khitan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update_khitan', ['id' => $khitan->id]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $khitan->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control"
                                        value="{{ $khitan->tanggal }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jam">Jam</label>
                                    <input type="time" name="jam" id="jam" class="form-control"
                                        value="{{ $khitan->jam }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_paket">Jenis Paket</label>
                                    <input type="text" name="jenis_paket" id="jenis_paket" class="form-control"
                                        value="{{ $khitan->jenis_paket }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tempat">Tempat</label>
                                    <input type="text" name="tempat" id="tempat" class="form-control"
                                        value="{{ $khitan->tempat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        value="{{ $khitan->alamat }}" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="belum" {{ $khitan->status == 'belum' ? 'selected' : '' }}>Belum
                                            Khitan</option>
                                        <option value="selesai" {{ $khitan->status == 'selesai' ? 'selected' : '' }}>Selesai
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
