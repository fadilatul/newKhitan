@extends('layouts.app')

@section('title', 'Edit Data Pasien')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Pasien</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $patient->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                        value="{{ $patient->tanggal_lahir }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="usia">Usia</label>
                                    <input type="number" class="form-control" id="usia" name="usia"
                                        value="{{ $patient->usia }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        value="{{ $patient->alamat }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="nomer_hp">Nomor HP</label>
                                    <input type="text" class="form-control" id="nomer_hp" name="nomer_hp"
                                        value="{{ $patient->nomer_hp }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input type="text" class="form-control" id="kategori" name="kategori"
                                        value="{{ $patient->kategori }}" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
