@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Kegiatan')

@section('content_header')

Edit Data Kegiatan

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kegiatan</div>
                <div class="card-body">
                   <form action="{{route('data_kegiatan.update',$kegiatan->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Judul Kegiatan</label>
                            <input type="text" name="judul" value="{{$kegiatan->judul}}" class="form-control @error('judul') is-invalid @enderror">
                             @error('judul')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Foto</label>
                            <input type="number" name="cover" value="{{$kegiatan->cover}}" class="form-control @error('telepon') is-invalid @enderror">
                             @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$kegiatan->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror">
                             @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
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