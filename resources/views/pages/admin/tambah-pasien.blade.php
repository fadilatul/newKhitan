@extends('layouts.app')
@section('title')
    Tambah Data Pasien
@endsection
@section('content')
    <div class="content-body">

        <div class="container-fluid">
            <div class="row">
                <form action="/admin/tambah-pasien" method="POST">
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
                                                <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                                                <p class="text-muted text-truncate mb-0">Jenis Pemeriksaan, Nama, Tanggal
                                                    Lahir, Usia, Jenis Kelamin, Keterangan, Nomer Hp, Alamat
                                                    kategori, dsb</p>
                                            </div>
                                            <div class="flex-shrink-0"> <i
                                                    class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                        </div>
                                    </div>
                                </a>
                                <div id="personal-data" class="collapse show">
                                    <div class="p-4 border-top">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label for="jenis_pemeriksaan">Jenis Pemeriksaan</label>
                                                    <select id="jenis_pemeriksaan" name="jenis_pemeriksaan"
                                                        class="form-control">
                                                        <option value="">Pilih Jenis Pemeriksaan</option>
                                                        <option value="periksa_umum">Periksa Umum</option>
                                                        <option value="periksa_gigi">Periksa Gigi</option>
                                                        <!-- Tambahkan jenis pemeriksaan lain jika ada -->
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-nisn">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="personal-data-nisn"
                                                        name="name" placeholder="Masukkan Name" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-nik">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="birthdate"
                                                        name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir"
                                                        value="" required onchange="calculateAge()">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-name">Usia</label>
                                                    <input type="number" class="form-control" id="age" name="usia"
                                                        placeholder="Masukkan Usia" value="" required>

                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-gender">Jenis
                                                        Kelamin</label>
                                                    <select class="form-control wide" name="jenis_kelamin" value="">
                                                        <option value="" disabled selected>Pilih
                                                            Jenis Kelamin </option>
                                                        <option value="Laki-laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data">Keterangan</label>
                                                    <select class="form-control wide" name="keterangan" value="keterangan">
                                                        <option selected>Pilih Keterangan
                                                        </option>
                                                        <option value="belumkawin">Belum Kawin</option>
                                                        <option value="kawin">Kawin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4 mb-lg-0">
                                                    <label class="form-label">Nomer Hp/WhatApp</label>
                                                    <input type="number" class="form-control" id="basicpill"
                                                        name="nomer_hp" placeholder="Masukkan Nomer Hp"
                                                        value="{{ old('tempatlahir') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4 mb-lg-0">
                                                    <label class="form-label" for="billing-city">Kategori</label>
                                                    <select class="form-control wide" name="kategori" value="">
                                                        <option selected>Pilih Ketegori
                                                        </option>
                                                        <option value="umum">Umum</option>
                                                        <option value="bpjs">BPJS</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-4 mt-4">
                                                <label class="form-label" for="billing-address">Alamat</label>

                                                <textarea class="form-control" id="billing-address" rows="3" name="alamat" required
                                                    placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <a href="#parental-data" class="collapsed text-dark" data-bs-toggle="collapse">
                                    <div class="p-4">
                                        <input name="gejala" value="belum di priksa" type="hidden"
                                            class="form-control rounded-pill">
                                        <input name="diagnosa" value="belum di priksa" type="hidden"
                                            class="form-control rounded-pill">
                                        <input name="terapi" value="belum di priksa" type="hidden"
                                            class="form-control rounded-pill">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3"> <i class="uil uil-bill text-primary h2"></i>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-16 mb-1">Anamnese</h5>
                                                <p class="text-muted text-truncate mb-0">Poli,Tekanan Darah, Suhu Tubuh.
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0"> <i
                                                    class="mdi mdi-chevron-up accor-down-icon font-size-24"></i> </div>
                                        </div>
                                    </div>
                                </a>
                                <div id="parental-data" class="collapse">
                                    <div class="p-4 border-top">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label for="poli">Poli</label>
                                                    <input type="text" id="poli" name="poli"
                                                        class="form-control" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-name">Tekanan
                                                        Darah</label>
                                                    <input type="text" class="form-control" id="personal-data-name"
                                                        name="tekanan_darah" placeholder="Cek Tekanan Darah">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3 mb-4">
                                                    <label class="form-label" for="personal-data-gender">Suhu Tubuh
                                                    </label>

                                                    <input type="text" class="form-control" id="personal-data-name"
                                                        name="suhu_tubuh" placeholder="Cek Suhu Tubuh">
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

@push('prepend-script')
    <script>
        function calculateAge() {
            var birthdate = document.getElementById("birthdate").value;
            if (birthdate === "") return; // Jangan lakukan apa-apa jika input kosong

            var birthDate = new Date(birthdate);
            var today = new Date();

            var age = today.getFullYear() - birthDate.getFullYear();
            var monthDifference = today.getMonth() - birthDate.getMonth();

            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            document.getElementById("age").value = age;
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jenisPemeriksaanSelect = document.getElementById('jenis_pemeriksaan');
            const poliInput = document.getElementById('poli');

            jenisPemeriksaanSelect.addEventListener('change', function() {
                const selectedJenis = jenisPemeriksaanSelect.value;

                if (selectedJenis === 'periksa_umum') {
                    poliInput.value = 'umum';
                } else if (selectedJenis === 'periksa_gigi') {
                    poliInput.value = 'gigi';
                } else {
                    poliInput.value = '';
                }
            });
        });
    </script>
@endpush
