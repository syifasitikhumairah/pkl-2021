@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Kegiatan')

@section('content_header')

    Data Kegiatan

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
    <script src="{{asset('js/sweetalert2.js')}}"></script>
    <script>
        $(".delete-confirm").click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Kegiatan
                        <a href="{{ route('data_kegiatan.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah Data Kegiatan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tangal</th>
                                    <th>Foto</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($kegiatan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->tanggal }}</th>
                                        <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:80px;"
                                                alt="Cover"></td>
                                        <td>{{ $data->keterangan }}</th>
                                        <td>
                                            <form action="{{ route('data_kegiatan.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('data_kegiatan.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('data_kegiatan.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit"
                                                    class="btn btn-outline-danger delete-confirm">Delete</button>
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
