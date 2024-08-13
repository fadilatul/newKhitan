@extends('layouts.app')
@section('title')
Tambah Terapi
@endsection
@section('content')
<div class="content-body">

    <div class="container-fluid">
        <div class="row">
            <form action="/terapi/add" method="POST">
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
                                            <h5 class="font-size-16 mb-1">Data Terapi</h5>
                                            <p class="text-muted text-truncate mb-0">Type, Nama</p>
                                        </div>
                                        <div class="flex-shrink-0"> <i
                                                class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                    </div>
                                </div>
                            </a>
                            <div id="personal-data" class="collapse show">
                                <div class="p-4 border-top">
                                    <div class="row">
                                        @if(Auth::user()->name == 'DokterGigi')
                                        <div class="col-6">
                                            <div class="mb-3 mb-4">
                                                <label>Jenis Terapi</label>
                                                <select name="type" class="form-control">

                                                    <option value="gigi">Gigi</option>
                                                    <!-- Tambahkan jenis pemeriksaan lain jika ada -->
                                                </select>

                                            </div>
                                        </div>
                                        @else
                                        <div class="col-6">
                                            <div class="mb-3 mb-4">
                                                <label>Jenis Terapi</label>
                                                <select name="type" class="form-control">

                                                    <option value="umum">Umum</option>
                                                    <!-- Tambahkan jenis pemeriksaan lain jika ada -->
                                                </select>

                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-nisn">Nama Terapi</label>
                                                <input type="text" class="form-control" id="personal-data-nisn"
                                                    name="name" placeholder="Masukkan Name" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="personal-data-nisn">Obat</label>
                                                <input type="text" class="form-control" id="personal-data-nisn"
                                                    name="obat" placeholder="Masukkan Obat" required>
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
                            <button type="submit" class="btn btn-primary">Buat Terapi</button>
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