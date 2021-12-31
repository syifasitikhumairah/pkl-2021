@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

DATA DONASI

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Donasi
                    <a href="{{route('donasi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Donasi</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Donatur</th>
                                <th>Nominal</th>
                                <th>Tanggal</th>
                                <th>Norek</th>
                                <th>Nama Bank</th>
                                <th>Pemilik Rek</th>
                                <th>Telepon</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($donasi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nm_donatur}}</td>
                                <td>Rp.{{number_format ($data->nominal)}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->norek}}</td>
                                <td>{{$data->nm_bank}}</td>
                                <td>{{$data->pemilik_rek}}</td>
                                <td>{{$data->telepon}}</td>
                                <td>{{$data->keterangan}}</td>
                                <td>
                                    <form action="{{route('donasi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('donasi.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('donasi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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