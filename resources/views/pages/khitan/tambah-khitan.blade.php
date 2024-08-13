@extends('layouts.app')
@section('title', 'Tambah Data Khitan')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <form action="/add-khitan" method="POST">
                @csrf
                <input type="hidden" value="belum" name="status" />
                <div class="col-xl-12">
                    <div class="custom-accordion">
                        <div class="card">
                            <a href="#personal-data" class="text-dark" data-bs-toggle="collapse">
                                <div class="p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="uil uil-receipt text-primary h2"></i>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">Daftar Khitan</h5>
                                            <p class="text-muted text-truncate mb-0">Nama, Tanggal, Jam, Jenis Khitan, Tempat, Alamat</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div id="personal-data" class="collapse show">
                                <div class="p-4 border-top">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="tanggal">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="tanggal">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="tanggal">Tanggal Daftar</label>
                                                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="jam">Jam Daftar</label>
                                                <input type="time" class="form-control" name="jam" placeholder="Masukkan Jam" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="jenis_khitan">Jenis Khitan</label>
                                                <select class="form-control" name="jenis_khitan" required>
                                                    <option value="" disabled selected>Pilih Jenis Khitan</option>
                                                    <option value="konvensional">Konvensional</option>
                                                    <option value="flash_couter">Flash Couter</option>
                                                    <option value="smart_klomp">Smart Klomp</option>
                                                    <option value="cincin">Cincin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="tempat">Tempat</label>
                                                <select class="form-control" name="tempat" required>
                                                    <option value="" disabled selected>Pilih Tempat</option>
                                                    <option value="gkz">Gkz</option>
                                                    <option value="rumah">Rumah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="name_orangtua">Nama Orangtua</label>
                                                <input type="text" class="form-control" name="name_orangtua" placeholder="Masukkan Nama Orangtua" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="nomer_hp">Nomor HP</label>
                                                <input type="text" class="form-control" name="nomer_hp" placeholder="Masukkan Nomor HP" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="alamat">Alamat</label>
                                                <textarea class="form-control" rows="3" name="alamat" required placeholder="Masukkan alamat lengkap"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="alergi_obat">Alergi Obat</label>
                                                <input type="text" class="form-control" name="alergi_obat" placeholder="Masukkan Alergi Obat">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="bakat_kloid">Bakat Kloid</label>
                                                <input type="text" class="form-control" name="bakat_kloid" placeholder="Masukkan Bakat Kloid">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="biaya">Biaya</label>
                                                <input type="number" class="form-control" name="biaya" placeholder="Masukkan Biaya">
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
                            <button type="submit" class="btn btn-primary">Buat Pendaftaran</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection