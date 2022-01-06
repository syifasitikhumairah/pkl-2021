@extends('adminlte::page')

@section('title', 'Pondok Yatim | Donasi')

@section('content_header')

Tambah Donasi

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Donasi</div>
                <div class="card-body">
                   <form action="{{route('donasi.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukkan Nama Donatur</label>
                            <input type="text" name="nm_donatur" class="form-control @error('nm_donatur') is-invalid @enderror">
                             @error('nm_donatur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Masukkan Nominal</label>
                            <input type="number" name="nominal" placeholder="Rp. " class="form-control @error('nominal') is-invalid @enderror">
                             @error('nominal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                             @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Masukkan Nomor Rekening</label>
                            <input type="number" name="norek"  class="form-control @error('norek') is-invalid @enderror">
                             @error('norek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Bank</label>
                            <select name="nm_bank" class="form-control @error('nm_bank') is-invalid @enderror" >
                                    <option value="BCA">BCA</option>
                                    <option value="BRI">BRI</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="BSI">BSI</option>
                            </select>
                             @error('nm_bank')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Pemilik Rekening</label>
                            <input type="text" name="pemilik_rek" class="form-control @error('pemilik_rek') is-invalid @enderror">
                             @error('pemilik_rek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Nomor Telepon</label>
                            <input type="number" name="telepon" placeholder="+62 "class="form-control @error('telepon') is-invalid @enderror">
                             @error('telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Keterangan</label>
                            <input type="text" name="keterangan" placeholder="(Pesan atau do'a yang akan disampaikan...)" class="form-control @error('keterangan') is-invalid @enderror">
                             @error('keterangan')
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