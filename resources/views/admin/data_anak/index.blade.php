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
                    Data Anak
                    <a href="{{route('data_anak.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Data Anak</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Anak</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Nama Wali</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($data_anak as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nm_anak}}</td>
                                <td>{{$data->tempat_lahir}}</td>
                                <td>{{$data->tgl_lahir}}</td>
                                <td>{{$data->jk}}</td>
                                <td>{{$data->pendidikan}}</td>
                                <td>{{$data->nm_wali}}</td>
                                <td>{{$data->alamat}}</td>
                                <td>{{$data->foto}}</td>
                                <td>
                                    <form action="{{route('data_anak.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('data_anak.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('data_anak.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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