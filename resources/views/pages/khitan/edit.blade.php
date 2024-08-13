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
                        <!-- Display Flash Messages -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @elseif (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif

                        <form action="{{ route('update_khitan', ['id' => $khitan->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $khitan->id }}" />

                            <!-- Form fields -->
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name', $khitan->name) }}" required>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="form-group col-6 mb-3">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"
                                        value="{{ old('tempat_lahir', $khitan->tempat_lahir) }}" required>
                                    @error('tempat_lahir')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                        value="{{ old('tanggal_lahir', $khitan->tanggal_lahir) }}" required>
                                    @error('tanggal_lahir')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="name_orangtua">Name Orang Tua</label>
                                    <input type="text" name="name_orangtua" id="name_orangtua" class="form-control"
                                        value="{{ old('name_orangtua', $khitan->name_orangtua) }}" required>
                                    @error('name_orangtua')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control"
                                        value="{{ old('tanggal', $khitan->tanggal) }}" required>
                                    @error('tanggal')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="jam">Jam</label>
                                    <input type="time" name="jam" id="jam" class="form-control"
                                        value="{{ old('jam', $khitan->jam) }}" required>
                                    @error('jam')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="jenis_khitan">Jenis Khitan</label>
                                    <select class="form-control" name="jenis_khitan" id="jenis_khitan">
                                        <option value="konvensional" {{ $khitan->jenis_khitan == 'konvensional' ? 'selected' : '' }}>Konvensional</option>
                                        <option value="flash_couter" {{ $khitan->jenis_khitan == 'flash_couter' ? 'selected' : '' }}>Flash Couter</option>
                                        <option value="smart_klomp" {{ $khitan->jenis_khitan == 'smart_klomp' ? 'selected' : '' }}>Smart Klomp</option>
                                        <option value="cincin" {{ $khitan->jenis_khitan == 'cincin' ? 'selected' : '' }}>Cincin</option>
                                    </select>
                                    @error('jenis_khitan')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="tempat">Tempat</label>
                                    <input type="text" name="tempat" id="tempat" class="form-control"
                                        value="{{ old('tempat', $khitan->tempat) }}" required>
                                    @error('tempat')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-12 mb-3">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        value="{{ old('alamat', $khitan->alamat) }}" required>
                                    @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="alergi_obat">Alergi Obat</label>
                                    <input type="text" name="alergi_obat" id="alergi_obat" class="form-control"
                                        value="{{ old('alergi_obat', $khitan->alergi_obat) }}">
                                    @error('alergi_obat')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="bakat_kloid">Bakat Kloid</label>
                                    <input type="text" name="bakat_kloid" id="bakat_kloid" class="form-control"
                                        value="{{ old('bakat_kloid', $khitan->bakat_kloid) }}">
                                    @error('bakat_kloid')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="nomer_hp">Nomer Hp</label>
                                    <input type="text" name="nomer_hp" id="nomer_hp" class="form-control"
                                        value="{{ old('nomer_hp', $khitan->nomer_hp) }}" required>
                                    @error('nomer_hp')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-3">
                                    <label for="biaya">Biaya</label>
                                    <input type="text" name="biaya" id="biaya" class="form-control"
                                        value="{{ old('biaya', $khitan->biaya) }}">
                                    @error('biaya')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="belum" {{ old('status', $khitan->status) == 'belum' ? 'selected' : '' }}>Belum Khitan</option>
                                        <option value="selesai" {{ old('status', $khitan->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                    @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection