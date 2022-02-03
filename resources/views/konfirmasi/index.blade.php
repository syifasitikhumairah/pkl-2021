@extends('adminlte::page')

@section('title', 'Pondok Yatim | Konfirmasi Donasi')

@section('content_header')

Data Konfirmasi Donasi

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Konfirmasi Donasi
                    <a href="{{route('konfirmasi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Konfirmasi Donasi</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>ID Donasi</th>
                                <th>Nama Donatur</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($konfirmasi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->donasi->id}}</td>
                                <td>{{$data->nm_donatur}}</td>
                                <td>
                                    <form action="{{route('konfirmasi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <!-- <a href="{{route('konfirmasi.edit',$data->id)}}" class="btn btn-outline-info">Edit</a> -->
                                        <a href="{{route('konfirmasi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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