@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Kegiatan</h2>
        </div>
        @foreach ($kegiatan as $data)
        <div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
        <img src="{{ $data->image() }}" class="card-img-top" alt="gambar" >
        <div class="p-4">
            <h2>{{ $data->judul }}</h2>
            <p class="mt-5">{{ $data->keterangan }}</p>
        </div>
    </div>
    @endforeach
@endsection
