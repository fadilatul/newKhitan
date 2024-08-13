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
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $pasien->name }}">
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="tempat">Tempat</label>
                                    <input type="text" name="tempat" id="tempat" class="form-control" value="{{ $pasien->tempat }}">
                                </div>
                                <div class="form-group col-4">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $pasien->tanggal_lahir }}">
                                </div>
                                <div class="form-group col-4 mb-3">
                                    <label for="usia">Usia</label>
                                    <input type="number" name="usia" id="usia" class="form-control" value="{{ $pasien->usia }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 mb-4">
                                        <label>Tinggi Badan</label>
                                        <input type="text" class="form-control" name="tinggi_badan" placeholder="Masukkan Tinggi Badan" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 mb-4">
                                        <label>Berat Badan</label>
                                        <input type="text" class="form-control" name="berat_badan" placeholder="Masukkan Berat Badan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control">
                                        <option value="">Pilih Agama</option>
                                        <option value="islam" {{ $pasien->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                        <option value="kristen" {{ $pasien->agama == 'kristen' ? 'selected' : '' }}>Kristen</option>
                                        <option value="katolik" {{ $pasien->agama == 'katolik' ? 'selected' : '' }}>Katolik</option>
                                        <option value="buddha" {{ $pasien->agama == 'buddha' ? 'selected' : '' }}>Buddha</option>
                                        <option value="hindu" {{ $pasien->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                        <option value="khonghucu" {{ $pasien->agama == 'khonghucu' ? 'selected' : '' }}>Khonghucu</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <label for="pendidikan">Pendidikan</label>
                                    <select name="pendidikan" id="pendidikan" class="form-control">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="sd" {{ $pasien->pendidikan == 'sd' ? 'selected' : '' }}>SD</option>
                                        <option value="smp" {{ $pasien->pendidikan == 'smp' ? 'selected' : '' }}>SMP</option>
                                        <option value="sma" {{ $pasien->pendidikan == 'sma' ? 'selected' : '' }}>SMA</option>
                                        <option value="pt" {{ $pasien->pendidikan == 'pt' ? 'selected' : '' }}>PT</option>
                                    </select>
                                </div>
                                <div class="form-group col-4 mb-3">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ $pasien->pekerjaan }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="alergi_obat">Alergi Obat</label>
                                    <input type="text" name="alergi_obat" id="alergi_obat" class="form-control" value="{{ $pasien->alergi_obat }}">
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="bakat_kloid">Bakat Kloid</label>
                                    <input type="text" name="bakat_kloid" id="bakat_kloid" class="form-control" value="{{ $pasien->bakat_kloid }}">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="name_orangtua">Nama Orangtua</label>
                                <input type="text" name="name_orangtua" id="name_orangtua" class="form-control" value="{{ $pasien->name_orangtua }}">
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="belumkawin" {{ $pasien->status == 'belumkawin' ? 'selected' : '' }}>Belum Kawin</option>
                                        <option value="kawin" {{ $pasien->status == 'kawin' ? 'selected' : '' }}>Kawin</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                        <option value="laki-laki" {{ $pasien->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{ $pasien->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="nomer_hp">Nomor HP</label>
                                <input type="text" name="nomer_hp" id="nomer_hp" class="form-control" value="{{ $pasien->nomer_hp }}">
                            </div>
                            <div class="form-group mb-5">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $pasien->alamat }}">
                            </div>


                            <button type="submit" class="btn btn-primary w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection