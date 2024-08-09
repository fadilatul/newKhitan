@extends('layouts.app')
@section('title', 'Edit Data Gejala')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data Gejala</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('gejala.update', ['id' => $gejala->id]) }}" method="POST">

                                @csrf
                                <div class="form-group mb-3">
                                    <label>Jenis Gejala</label>
                                    <select name="type" class="form-control">
                                        <option selected>{{ $gejala->type }}</option>
                                        @if ($gejala->type == 'gigi')
                                            <option value="umum">Umum</option>
                                        @else
                                            <option value="gigi">Gigi</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $gejala->name }}">
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
