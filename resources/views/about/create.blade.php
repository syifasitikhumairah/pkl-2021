@extends('adminlte::page')

@section('title', 'Pondok Yatim | About')

@section('js')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
   var visi = document.getElementById("visi");
     CKEDITOR.replace(visi,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script><script>
   var misi = document.getElementById("misi");
     CKEDITOR.replace(misi,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endsection

@section('content_header')

    Tambah About

@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">About</div>
                    <div class="card-body">
                        <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Visi</label>
                                <textarea id="visi" name="visi"
                                    class="form-control @error('visi') is-invalid @enderror"></textarea>
                                @error('visi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Misi</label>
                                <textarea id="misi" name="misi"
                                    class="form-control @error('misi') is-invalid @enderror"></textarea>
                                @error('misi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Foto </label>
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
