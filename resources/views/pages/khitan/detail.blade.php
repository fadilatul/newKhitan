@extends('layouts.app')
@section('title')
Detail Khitan
@endsection

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="custom-accordion">
                    <div class="card card-body">
                        <div class="card-header">
                            <h4 class="card-title">DETAIL KHITAN</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row mb-2">
                                    <div class="pt-4 border-bottom-1 pb-3">
                                        <h4 class="text-primary"><b>DATA PENDAFTAR KHITAN</b></h4>
                                    </div>
                                    <div class="col-sm-4 col-5">
                                        <h5 class="f-w-400">Name</h5>
                                    </div>
                                    <div class="col-sm-8 col-7">
                                        <h5 class="f-w-500">: {{ $detail->name }}</h5>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-400">Tanggal Daftar</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        <h5 class="f-w-500">: {{ $detail->tanggal }}</h5>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-400">Jam Daftar</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        <h5 class="f-w-500">: {{$detail->jam}}</h5>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-400">Jenis Paket</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        <h5 class="f-w-500">: {{ $detail->jenis_paket }}</h5>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-400">Tempat</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        <h5 class="f-w-500">: {{ $detail->tempat }}</h5>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4 col-6">
                                        <h5 class="f-w-400">Alamat</h5>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                        <h5 class="f-w-500">: {{ $detail->alamat }}</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row-->
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection