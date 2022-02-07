@extends('adminlte::page')

@section('title', 'Pondok Yatim | Donasi')

@section('content_header')

    Data Donasi

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Donasi
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Donatur</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Tanggal</th>
                                    </th>
                                    <th>Nominal</th>
                                    <th>Keterangan</th>
                                    <th>Bukti</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($donasi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nm_donatur }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>Rp. {{ number_format($data->nominal) }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td><img src="{{ $data->image() }}" style="width:200px; height:200px;" alt="...">
                                        </td>
                                        <td>
                                            <form action="{{ route('donasi.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('donasi.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
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
