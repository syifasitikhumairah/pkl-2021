{{-- @extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Anak Asuh')

@section('content_header')

Edit Data Anak Asuh

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Anak Asuh</div>
                <div class="card-body">
                   <form action="{{route('data_anak.update',$donasi->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Donatur</label>
                            <input type="text" name="nm_donatur" value="{{$donasi->nm_anak}}" class="form-control @error('nm_donatur') is-invalid @enderror">
                             @error('nm_donatur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Rp. " value="{{$donasi->email}}" class="form-control @error('email') is-invalid @enderror">
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="number" name="telepon" value="{{$donasi->telepon}}" class="form-control @error('telepon') is-invalid @enderror">
                             @error('telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{$donasi->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror">
                             @error('tanggal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="number" name="nominal" placeholder="Rp. " value="{{$donasi->nominal}}" class="form-control @error('nominal') is-invalid @enderror">
                             @error('nominal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" placeholder="(Pesan atau do'a yang akan disampaikan...)" value="{{$donasi->keterangan}}" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                             @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Foto Bukti Transfer</label>
                            <input type="file" name="cover" value="{{$donasi->cover}}" class="form-control @error('cover') is-invalid @enderror">
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
