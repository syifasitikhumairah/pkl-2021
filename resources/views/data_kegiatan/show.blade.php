@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Kegiatan')

@section('content_header')

Menampilkan Data Kegiatan

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kegiatan</div>
                <div class="card-body">
                    <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul" value="{{$kegiatan->judul}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="text" name="tanggal" value="{{$kegiatan->tanggal}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="cover" value="{{$kegiatan->cover}}" class="form-control" readonly>
                        </div>
                    <div class="form-group">
                        <a href="{{url('admin/data_kegiatan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')

@endsection

@section('js')

@endsection