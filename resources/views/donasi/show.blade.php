@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Donasi')

@section('content_header')

    Menampilkan Data Donasi

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Donasi</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Donatur</label>
                            <input type="text" name="nm_donatur" value="{{ $donasi->nm_donatur }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="{{ $donasi->email }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="number" name="telepon" value="{{ $donasi->telepon }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="text" name="tanggal" value="{{ $donasi->tanggal }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="text" name="nominal" value="Rp. {{ number_format($donasi->nominal) }}"
                                class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" class="form-control"
                                readonly>{{ $donasi->keterangan }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label><br>
                            <img src="{{ $donasi->image() }}" alt="" style="width:160px; height:300px;" alt="Cover">
                        </div>
                        <div class="form-group">
                            <a href="{{ url('admin/donasi') }}" class="btn btn-block btn-outline-primary">Kembali</a>
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
