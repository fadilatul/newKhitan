@extends('layouts.app')
@section('title', 'Edit Data Terapi')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data Terapi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('terapi.update', ['id' => $terapi->id]) }}" method="POST">

                            @csrf
                            <div class="form-group mb-3">
                                <label>Jenis Tarapi</label>
                                <select name="type" class="form-control">
                                    <option selected>{{ $terapi->type }}</option>
                                    @if ($terapi->type == 'gigi')
                                    <option value="umum">Umum</option>
                                    @else
                                    <option value="gigi">Gigi</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $terapi->name }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Obat</label>
                                <input type="text" name="obat" id="name" class="form-control"
                                    value="{{ $terapi->obat }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection