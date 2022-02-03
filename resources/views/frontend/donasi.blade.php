@extends('layouts.frontend')
@section('content')
<div class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Donasi</h2>
        </div>
        <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
        <div class="col-lg-10 mt-7 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('storeDonasi')}}" method="post" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                <label for="">Nama Donatur</label>
                <input type="text" name="nm_donatur" class="form-control @error('nm_donatur') is-invalid @enderror">
                @error('nm_donatur')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                        </span>
                @enderror
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                 @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
              </div>
              <div class="form-group mt-3">
              <label for="">Telepon</label>
                <input type="number" name="telepon" class="form-control @error('telepon') is-invalid @enderror">
                 @error('telepon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group mt-3">
              <label for="">Tanggal</label>
                <input type="date" name="tanggal"  class="form-control @error('tanggal') is-invalid @enderror">
                 @error('tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group mt-3">
              <label for="">Nominal</label>
                <input type="number" name="nominal" placeholder="Rp. " class="form-control @error('nominal') is-invalid @enderror">
                 @error('nominal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group mt-3">
                <label for="">Masukkan Keterangan</label>
                    <textarea name="keterangan" placeholder="-- Pesan atau do'a yang akan disampaikan --" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                     @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group mt-3">
              <label for="">Foto Bukti Transfer</label>
                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                 @error('cover')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group text-center">
              <button type="submit" class="btn btn-outline-primary">Kirim</button>
              </div>
            </div>
            </form>
          </div>
</div>
</div>
</div>
@endsection
