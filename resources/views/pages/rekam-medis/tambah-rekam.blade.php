@extends('layouts.app')
@section('title')
Tambah Data Pasien
@endsection
@section('content')

<div class="content-body">
    <div class="container">
        <div class="card rounded-lg col-9 mx-auto">
            <div class="card-body">
                <form action="{{ route('add_rekam', $pasien_id) }}" method="POST">
                    @csrf
                    <h2>Tambah Data Anamnese</h2>
                    <input name="gejala" value="belum di priksa" type="hidden" class="form-control rounded-pill">
                    <input name="diagnosa" value="belum di priksa" type="hidden" class="form-control rounded-pill">
                    <input name="terapi" value="belum di priksa" type="hidden" class="form-control rounded-pill">
                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="poli">Poli</label>
                            <select id="inputKeterangan" name="poli" class="form-control rounded-pill">
                                <option selected>Pilih...</option>
                                <option value="umum">Umum</option>
                                <option value="gigi">Gigi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputAlamat">Tekanan Darah</label>
                        <input id="inputAlamat" name="tekanan_darah" type="text" class="form-control rounded-pill">
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputAlamat">Suhu Tubuh</label>
                        <input id="inputAlamat" name="suhu_tubuh" type="text" class="form-control rounded-pill">
                    </div>

                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-primary rounded-pill">Submit</button>
                        <a href="#" class="btn btn-secondary rounded-pill">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection