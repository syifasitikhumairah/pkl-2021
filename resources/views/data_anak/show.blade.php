@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Anak Asuh')

@section('content_header')

Menampilkan Data Anak Asuh

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Anak Asuh</div>
                <div class="card-body">
                    <div class="form-group">
                            <label for="">Nama Anak Asuh</label>
                            <input type="text" name="nm_anak" value="{{$data_anak->nm_anak}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{$data_anak->tempat_lahir}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{$data_anak->tgl_lahir}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jk" value="{{$data_anak->jk}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <input type="text" name="pendidikan" value="{{$data_anak->pendidikan}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Wali</label>
                            <input type="text" name="nm_wali" value="{{$data_anak->nm_wali}}" class="form-control"readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" value="{{$data_anak->alamat}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="cover" value="{{$data_anak->cover}}" class="form-control" readonly>
                        </div>
                    <div class="form-group">
                        <a href="{{url('admin/data_anak')}}" class="btn btn-block btn-outline-primary">Kembali</a>
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