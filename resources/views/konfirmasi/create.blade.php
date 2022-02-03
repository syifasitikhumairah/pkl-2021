@extends('adminlte::page')

@section('title', 'Pondok Yatim | Konfirmasi')

@section('content_header')

Tambah Konfirmasi

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Konfirmasi</div>
                <div class="card-body">
                   <form action="{{route('konfirmasi.store')}}" method="post">
                        @csrf
                        
                        <div class="form-group">
                            <label for="">Masukkan ID Donasi</label>
                            <input type="number" name="id_donasi" class="form-control @error('id_donasi') is-invalid @enderror">
                             @error('id_donasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><div class="form-group">
                            <label for="">Masukkan Nama Donatur</label>
                            <input type="text" name="nm_donatur" class="form-control @error('nm_donatur') is-invalid @enderror">
                             @error('nm_donatur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Masukkan Screenshoot bukti transfer</label>
                            <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                             @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->

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