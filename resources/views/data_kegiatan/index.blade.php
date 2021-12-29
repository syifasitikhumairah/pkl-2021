@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Kegiatan
                    <a href="{{route('data_kegiatan.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Kegiatan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kegiatan as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->judul}}</td>
                                <td>{{$data->tanggal}}</th>
                                <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Gambar"></td>
                                <td>
                                    <form action="{{route('data_kegiatan.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('data_kegiatan.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('data_kegiatan.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
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