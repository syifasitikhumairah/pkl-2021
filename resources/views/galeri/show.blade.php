@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Galeri')

@section('content_header')

    Menampilkan Data Galeri

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Galeri</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" name="judul" value="{{ $galeri->judul }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label><br>
                            <img src="{{ $galeri->image() }}" alt="" style="width:300px; height:160px;" alt="Cover">
                        </div>
                        <div class="form-group">
                            <a href="{{ url('admin/galeri') }}"
                                class="btn btn-block btn-outline-primary">Kembali</a>
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
