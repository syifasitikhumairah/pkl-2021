@extends('layouts.frontend')
@section('content')
<div class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Konfirmasi Donasi</h2>
        </div>

        <div class="row">

        <div class="col-lg-12 d-flex justify-content-center">
        <div class="col-lg-6 mt-7 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('konfirmasi.store')}}" method="post" class="php-email-form">
              <div class="row">
                  <div class="form-group mt-3">
                  <label for="">Masukkan ID Donasi</label>
                  <input type="number" name="id_donasi" class="form-control @error('id_donasi') is-invalid @enderror">
                 @error('id_donasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group mt-3">
                <label for="">Masukkan Nama Donatur</label>
                <input type="text" name="nm_donatur" class="form-control @error('nm_donatur') is-invalid @enderror">
                @error('nm_donatur')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                        </span>
                @enderror
                </div>
                <div class="form-group mt-3">
                <label for="">Masukkan Screenshot bukti trasferan</label>
                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                @error('cover')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                        </span>
                @enderror
                </div>
              <div class="form-group">
              <button type="reset" class="btn btn-outline-warning">Reset</button>
              <button type="submit" class="btn btn-outline-primary">Simpan</button>
              </div> 
            </div>
            </form>
          </div>
</div>
</div>
</div>
@endsection