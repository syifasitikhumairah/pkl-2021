@extends('layouts.frontend')
@section('content')
      <div class="container">
      <div class="section-title">
          <h2>Kegiatan</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($kegiatan as $data)
    <div class="col">
      <div class="card h-100">
        <img src="{{ asset('assets/img/.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>{{ $data->judul }}</b></h5>
        </div>
        <div class="card-footer">
          <small class="text-muted">{{ $data->tanggal }}</small>
        </div>
        
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection