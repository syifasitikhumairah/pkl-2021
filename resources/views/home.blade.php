@extends('adminlte::page')

@section('title', 'Pondok Yatim || Home')

@section('content_header')

    <h4>Dashboard</h4>

@endsection

@section('content')
    <div class="container">

        <div class="card">
            <h5 class="card-header">
                <center><b>Selamat Datang di Halaman Administrator</b></center>
            </h5>
            <div class="card-body">
                <p class="card-title">
                    <center>
                        <img src="assets/img/welcome.png" alt="" style="width:440px; height:200px;" alt="Cover"
                            class="card-img-top" alt="...">
                    </center>
                </p>
                <p class="card-text">
                    <center>Halaman ini hanya dapat diakses oleh user admin.</center>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-hand-holding-heart"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Donasi</span>
                        <span class="info-box-number">
                            <h3><b>{{ DB::table('donasis')->count() }}</b></h3>
                        </span>
                        <span class="info-box-content">
                            <a href="{{ route('donasi.index') }}" class="text-right">Lihat Detail</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1" style="background-color: #5cb874!important;"><i class="fas fa-baby"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Anak Asuh</span>
                        <span class="info-box-number">
                            <h3><b>{{ DB::table('data_anaks')->count() }}</b></h3>
                        </span>
                        <span class="info-box-content">
                            <a href="{{ route('data_anak.index') }}" class="text-right">Lihat Detail</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1" style="background-color: orange!important;"><i class="far fa-folder-open"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Data Kegiatan</span>
                        <span class="info-box-number">
                            <h3><b>{{ DB::table('data_kegiatans')->count() }}</b></h3>
                        </span>
                        <span class="info-box-content">
                            <a href="{{ route('data_kegiatan.index') }}" class="text-right">Lihat Detail</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1" style="background-color: #e74c3c!important;"><i class="fas fa-image"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Foto Galeri</span>
                        <span class="info-box-number">
                            <h3><b>{{ DB::table('galeris')->count() }}</b></h3>
                        </span>
                        <span class="info-box-content">
                            <a href="{{ route('galeri.index') }}" class="text-right">Lihat Detail</a>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>

    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
