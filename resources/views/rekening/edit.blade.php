@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Rekening')

@section('js')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

@endsection

@section('content_header')

    Edit Data Rekening

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Rekening</div>
                    <div class="card-body">
                        <form action="{{ route('rekening.update', $kegiatan->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukkan Nama Bank</label>
                                <input type="text" name="bank" value="{{ $kegiatan->bank }}"
                                    class="form-control @error('bank') is-invalid @enderror">
                                @error('bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Rekening</label>
                                <input type="number" name="rekening" value="{{ $kegiatan->rekening }}"
                                    class="form-control @error('rekening') is-invalid @enderror">
                                @error('rekening')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Atas Nama</label><br>
                                <input type="text" name="as" value= {{ $kegiatan->as }}
                                    class="form-control @error('as') is-invalid @enderror">
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

@section('css')

@endsection

@section('js')

@endsection
