@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Kegiatan</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($kegiatan as $data)
                <div class="col">
                    <div class="card h-100" style="box-shadow: 0px 0px 12px 0px rgb(34 34 34 / 7%);">
                        <img src="{{ $data->image() }}" alt="" style="width:354px; height:200px;" alt="Cover"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="padding:5px;"><b>{{ $data->judul }}</b></h5>
                            <p style="text-align: justify; ">{!! $data->keterangan !!}</p>
                        </div>
                        <div class="card-footer">
                            <center><small class="text-muted">{{ date('d-m-Y', strtotime($data->tanggal)) }}</small>
                            </center>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>
        <div class="form-group text-center">
            <a href="/kegiatan"><button type="submit" class="btn btn-outline-primary" style="background:#5cb874;
                border-color: #5cb874;
                color: white;
                border-radius:25px;
                width:400px;
                font-size: 18px;">Tampilkan Kegiatan Lebih Sedikit</button></a>
        </div>
    @endsection
