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
                        @if($rekams->gejala == 'belum dipriksa')
                        <input id="inputAlamat" name="gejala" type="text" class="form-control rounded-pill" placeholder="belum dipriksa">
                        @else
                        <input id="inputAlamat" name="gejala" type="text" value="{{$rekams->gejala}}" class="form-control rounded-pill">
                        @endif
                    </div>
                    <div class="form-group mb-4">

                        <label for="inputAlamat">Diagnosa</label>
                        @if($rekams->diagnosa == 'belum dipriksa')
                        <input name="diagnosa" type="text" value="" class="form-control rounded-pill" placeholder="belum dipriksa">
                        @else
                        <input name="diagnosa" type="text" value="{{$rekams->diagnosa}}" class="form-control rounded-pill">
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <label for="inputAlamat">Terapi</label>
                        @if($rekams->terapi == 'belum dipriksa')
                        <input name="terapi" type="text" class="form-control rounded-pill" placeholder="belum dipriksa">
                        @else
                        <input name="terapi" type="text" value="{{$rekams->terapi}}" class="form-control rounded-pill">
                        @endif
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