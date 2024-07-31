@extends('layouts.app')
@section('title', 'Edit Data Pendaftaran')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data Pendaftaran</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_pasien', ['id' => $pasien->id]) }}" method="POST">

                            @csrf
                            <div class="form-group mb-3">
                                <label for="jenis_pemeriksaan">Jenis Pemeriksaan</label>
                                <select name="jenis_pemeriksaan" class="form-control">
                                    <option selected>{{$pasien->jenis_pemeriksaan}}</option>
                                    @if($pasien->jenis_pemeriksaan == 'periksa_gigi')
                                    <option value="periksa_umum">Periksa Umum</option>
                                    @else
                                    <option value="periksa_gigi">Periksa Gigi</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $pasien->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $pasien->tanggal_lahir }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="usia">Usia</label>
                                <input type="number" name="usia" id="usia" class="form-control" value="{{ $pasien->usia }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="keterangan">Keterangan</label>
                                <select name="keterangan" id="keterangan" class="form-control">
                                    <option selected>{{$pasien->keterangan}}</option>
                                    @if($pasien->keterangan == "belumkawin")
                                    <option value="kawin">Kawin</option>
                                    @else

                                    <option value="belumkawin">Belum Kawin</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option selected>{{$pasien->jenis_kelamin}}</option>
                                    @if($pasien->jenis_kelamin == "laki-laki")
                                    <option value="perempuan">Perempuan</option>

                                    @else
                                    <option value="laki-laki">Laki-laki</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nomer_hp">Nomor HP</label>
                                <input type="text" name="nomer_hp" id="nomer_hp" class="form-control" value="{{  $pasien->nomer_hp }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{$pasien->alamat}}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="kategori">Kategori</label>
                                <select name="kategori" id="kategori" class="form-control">
                                    <option selected>{{$pasien->kategori}}</option>
                                    @if($pasien->kategori == "umum")
                                    <option value="bpjs">BPJS</option>

                                    @else
                                    <option value="umum">Umum</option>
                                    @endif
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