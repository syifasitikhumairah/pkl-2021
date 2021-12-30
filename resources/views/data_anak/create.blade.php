@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Anak Asuh')

@section('content_header')

Tambah Data Anak Asuh

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Anak Asuh</div>
                <div class="card-body">
                   <form action="{{route('data_anak.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Nama Anak Asuh</label>
                            <input type="text" name="nm_anak" class="form-control @error('nm_anak') is-invalid @enderror">
                             @error('nm_anak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Masukkan Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror">
                             @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukkan Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                             @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label><br>
                            <input type="radio" name="jk" value="Perempuan" > Perempuan
                            <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                            @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <select name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror" >
                                    <option value="-">-</option>
                                    <option value="Pra-TK">Pra-TK</option>
                                    <option value="Pendidikan Anak Usia Dini">Pendidikan Anak Usia Dini</option>
                                    <option value="Taman Kanak-kanak">Taman Kanak-kanak</option>
                                    <option value="Sekolah Dasar">Sekolah Dasar</option>
                                    <option value="Sekolah Menengah">Sekolah Menengah</option>
                            </select>
                            @error('pendidikan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Wali</label>
                            <input type="text" name="nm_wali" class="form-control @error('nm_wali') is-invalid @enderror">
                             @error('nm_wali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                             @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Masukan Foto Anak</label>
                            <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                             @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->
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

@endsection