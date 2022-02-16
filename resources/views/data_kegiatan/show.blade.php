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
                            <input type="text" name="judul" value="{{ $kegiatan->judul }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="text" name="tanggal" value="{{ $kegiatan->tanggal }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label><br>
                            <img src="{{ $kegiatan->image() }}" alt="" style="width:300px; height:160px;" alt="Cover">
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <div class="card"
                            style="background-color: #e9ecef;
                            border: 1px solid #ced4da;
                            opacity: 1;
                            display: block;
                            width: 100%;
                            padding: 0.375rem 0.75rem;
                            font-size: 1rem;
                            font-weight: 400;
                            line-height: 1.5;
                            color: #495057;
                            background-clip: padding-box;
                            border-radius: 0.25rem;
                            box-shadow: inset 0 0 0 transparent;
                            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">{!! $kegiatan->keterangan !!}</div>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('admin/data_kegiatan') }}"
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
