{{-- @extends('adminlte::page')

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
                            <label for="">Nama Donatur</label>
                            <input type="text" name="nm_donatur" class="form-control @error('nm_donatur') is-invalid @enderror">
                             @error('nm_donatur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Rp. " class="form-control @error('email') is-invalid @enderror">
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="number" name="telepon" class="form-control @error('telepon') is-invalid @enderror">
                             @error('telepon')
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
                            <label for="">Nominal</label>
                            <input type="number" name="nominal" placeholder="Rp. " class="form-control @error('nominal') is-invalid @enderror">
                             @error('nominal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" placeholder="(Pesan atau do'a yang akan disampaikan...)" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                             @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Foto Bukti Transfer</label>
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

@endsection --}}
