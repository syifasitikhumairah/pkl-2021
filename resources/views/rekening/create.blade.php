@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Rekening')

@section('js')

@endsection

@section('content_header')

    Tambah Data Rekening

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Rekening</div>
                    <div class="card-body">
                        <form action="{{ route('rekening.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukkan Nama Bank</label>
                                <input type="text" name="bank" class="form-control @error('bank') is-invalid @enderror">
                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Rekening</label>
                                <input type="number" name="rekening"
                                    class="form-control @error('rekening') is-invalid @enderror">
                                @error('rekening')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Atas Nama</label>
                                <input type="text" name="as" class="form-control @error('as') is-invalid @enderror">
                                @error('as')
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
