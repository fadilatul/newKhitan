@extends('layouts.app')
@section('title')
Tambah Data Khitan
@endsection
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <form action="/add-khitan" method="POST">
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
                                            <h5 class="font-size-16 mb-1">Daftar Khitan</h5>
                                            <p class="text-muted text-truncate mb-0">Name, Tanggal, , Jam, Jenis Paket, Alamat</p>
                                        </div>
                                        <div class="flex-shrink-0"> <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                    </div>
                                </div>
                            </a>
                            <div id="personal-data" class="collapse show">
                                <div class="p-4 border-top">
                                    <input type="hidden" name="status" value="belum">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-nisn">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="name" placeholder="Masukkan Name" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-nik">Tanggal Daftar</label>
                                                <input type="date" class="form-control" name="tanggal" placeholder="Masukkan Tanggal" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-name">Jam Daftar</label>
                                                <input type="time" class="form-control" name="jam" placeholder="Masukkan Jam" value="" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-gender">Jenis
                                                    Paket</label>
                                                <select class="form-control wide" name="jenis_paket" value="">
                                                    <option value="" disabled selected>Pilih
                                                        Jenis Paket </option>
                                                    <option value="paket1">Paket 1</option>
                                                    <option value="paket2">Paket 2</option>
                                                    <option value="paket3">Paket 3</option>
                                                    <option value="paket4">Paket 4</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-gender">Tempat</label>
                                                <select class="form-control wide" name="tempat" value="">
                                                    <option value="" disabled selected>Pilih
                                                        Tempat </option>
                                                    <option value="klinik">Klinik</option>
                                                    <option value="rumah">Rumah</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-nik">Alamat</label>
                                                    <textarea class="form-control" rows="3" name="alamat" required placeholder="Masukkan alamat lengkap"></textarea>
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
                            <button type="submit" class="btn btn-primary">Buat Pendaftaran</button>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </form>
        </div>
    </div>
</div>
@endsection