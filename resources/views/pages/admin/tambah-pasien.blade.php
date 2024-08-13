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
                                            <h5 class="font-size-16 mb-1">Data Pribadi</h5>
                                            <p class="text-muted text-truncate mb-0">Nama, Tempat Lahir, Tanggal Lahir, Usia, Jenis Kelamin, Agama, Pendidikan, Pekerjaan, Alamat</p>
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
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="{{ old('name') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="tempat">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Lahir" value="{{ old('tempat') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ old('tanggal_lahir') }}" required onchange="calculateAge()">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3 mb-4">
                                                <label for="usia">Usia</label>
                                                <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia" value="{{ old('usia') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3 mb-4">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                                    <option value="laki-laki">Laki-Laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-3 mb-4">
                                                <label for="agama">Status</label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option value="" disabled>Pilih Status</option>
                                                    <option value="belumkawin">Belum Kawin</option>
                                                    <option value="kawin">Kawin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-3 mb-4">
                                                <label for="agama">Agama</label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option value="" disabled>Pilih Agama</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="buddha">Buddha</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="khonghucu">Khonghucu</option>
                                                </select>
                                            </div>
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
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="pendidikan">Pendidikan</label>
                                                <select class="form-control" id="pendidikan" name="pendidikan">
                                                    <option value="" selected>Pilih Pendidikan</option>
                                                    <option value="sd">SD</option>
                                                    <option value="smp">SMP</option>
                                                    <option value="sma">SMA</option>
                                                    <option value="pt">PT</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="pekerjaan">Pekerjaan</label>
                                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" value="{{ old('pekerjaan') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="name_orangtua">Nama Orang Tua</label>
                                                <input type="text" class="form-control" id="name_orangtua" name="name_orangtua" placeholder="Masukkan Nama Orang Tua" value="{{ old('name_orangtua') }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label for="alergi_obat">Alergi Obat</label>
                                                <input type="text" class="form-control" id="alergi_obat" name="alergi_obat" placeholder="Masukkan Alergi Obat" value="{{ old('alergi_obat') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label for="bakat_kloid">Bakat Kloid</label>
                                                <input type="text" class="form-control" id="bakat_kloid" name="bakat_kloid" placeholder="Masukkan Bakat Kloid" value="{{ old('bakat_kloid') }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label for="nomer_hp">Nomor Hp/WhatsApp</label>
                                                <input type="text" class="form-control" id="nomer_hp" name="nomer_hp" placeholder="Masukkan Nomor Hp/WhatsApp" value="{{ old('nomer_hp') }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3 mb-4">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan Alamat Lengkap" required>{{ old('alamat') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <a href="#parental-data" class="collapsed text-dark" data-bs-toggle="collapse">
                                <div class="p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="uil uil-bill text-primary h2"></i>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="font-size-16 mb-1">Anamnese</h5>
                                            <p class="text-muted text-truncate mb-0">Poli, Tekanan Darah, Suhu Tubuh.</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <i class="mdi mdi-chevron-up accor-down-icon font-size-24"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div id="parental-data" class="collapse">
                                <div class="p-4 border-top">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="poli">Poli</label>
                                                <select class="form-control" id="poli" name="poli" required>
                                                    <option value="" disabled selected>Pilih Poli</option>
                                                    <option value="umum">Umum</option>
                                                    <option value="gigi">Gigi</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="tekanan_darah">Tekanan Darah</label>
                                                <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" placeholder="Cek Tekanan Darah">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3 mb-4">
                                                <label for="suhu_tubuh">Suhu Tubuh</label>
                                                <input type="text" class="form-control" id="suhu_tubuh" name="suhu_tubuh" placeholder="Cek Suhu Tubuh">
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

@push('prepend-script')
<script>
    function calculateAge() {
        var birthdate = document.getElementById("tanggal_lahir").value;
        if (birthdate === "") return; // Jangan lakukan apa-apa jika input kosong

        var birthDate = new Date(birthdate);
        var today = new Date();

        var age = today.getFullYear() - birthDate.getFullYear();
        var monthDifference = today.getMonth() - birthDate.getMonth();

        if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        document.getElementById("usia").value = age;
    }
</script>
@endpush