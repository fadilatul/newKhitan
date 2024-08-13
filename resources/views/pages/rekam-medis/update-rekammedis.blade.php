@extends('layouts.app')
@section('title')
Update Rekam Medis
@endsection
@section('content')

<div class="content-body">
    <div class="container">
        <div class="card rounded-lg col-9 mx-auto">
            <div class="card-body">
                <form action="{{route('update_rekam', $pasien_id)}}" method="POST">
                    @csrf
                    <h2>Update Data Anamnese</h2>
                    <div class="form-group">
                        <div class="form-group mb-4">
                            <label for="poli">Poli</label>
                            <select id="inputKeterangan" name="poli" class="form-control rounded-pill">
                                <option selected>{{$rekams->poli}}</option>
                                @if($rekams->poli == 'umum')
                                <option value="gigi">Gigi</option>
                                @else
                                <option value="umum">Umum</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputAlamat">Tekanan Darah</label>
                        <input id="inputAlamat" name="tekanan_darah" type="text" value="{{$rekams->tekanan_darah}}" class="form-control rounded-pill">
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputAlamat">Suhu Tubuh</label>
                        <input id="inputAlamat" name="suhu_tubuh" type="text" value="{{$rekams->suhu_tubuh}}" class="form-control rounded-pill">
                    </div>

                    <div class="form-group mb-4">
                        <label for="inputAlamat">Gejala</label>
                        @if(Auth::user()->name == 'DokterGigi')
                        <select id="inputKeterangan" name="gejala_id" class="form-control rounded-pill">
                            <option selected>Pilih Gejala</option>
                            @foreach ($gejalagigi as $gejala)
                            <option value="{{ $gejala->id }}">{{ $gejala->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select id="inputKeterangan" name="gejala_id" class="form-control rounded-pill">
                            <option selected>Pilih Gejala</option>
                            @foreach ($gejalaumum as $gejala)
                            <option value="{{ $gejala->id }}">{{ $gejala->name }}</option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                    <div class=" form-group mb-4">

                        <label for="inputAlamat">Diagnosa</label>
                        @if(Auth::user()->name == 'DokterGigi')
                        <select id="inputKeterangan" name="diagnosa_id" class="form-control rounded-pill">
                            <option selected>Pilih Diagnosa</option>
                            @foreach ($diagnosagigi as $diagnosa)
                            <option value="{{ $diagnosa->id }}">{{ $diagnosa->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select id="inputKeterangan" name="diagnosa_id" class="form-control rounded-pill">
                            <option selected>Pilih Diagnosa</option>
                            @foreach ($diagnosaumum as $diagnosa)
                            <option value="{{ $diagnosa->id }}">{{ $diagnosa->name }}</option>
                            @endforeach
                        </select>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <label for="inputAlamat">Terapi</label>
                        @if(Auth::user()->name == 'DokterGigi')
                        <select id="inputKeterangan" name="terapi_id" class="form-control rounded-pill">
                            <option selected>Pilih Terapi</option>
                            @foreach ($terapigigi as $terapi)
                            <option value="{{ $terapi->id }}">{{ $terapi->name }}</option>
                            @endforeach
                        </select>
                        @else
                        <select id="inputKeterangan" name="terapi_id" class="form-control rounded-pill">
                            <option selected>Pilih Terapi</option>
                            @foreach ($terapiumum as $terapi)
                            <option value="{{ $terapi->id }}">{{ $terapi->name }}</option>
                            @endforeach
                        </select>
                        @endif
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputAlamat">Biaya</label>
                        <input id="inputAlamat" name="biaya" type="text" value="{{$rekams->biaya}}" class="form-control rounded-pill">
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