@extends('adminlte::page')

@section('title', 'Pondok Yatim | Data Rekening')

@section('content_header')

    Data Rekening

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#rekening').DataTable();
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
                        Data Rekening
                        <a href="{{ route('rekening.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah Data Rekening</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="rekening">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bank</th>
                                    <th>Rekening</th>
                                    <th>Atas Nama</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach ($rekening as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->bank }}</td>
                                        <td>{{ $data->rekening }}</th>
                                        <td>{{ $data->as }}</td>

                                        <td>
                                            <form action="{{ route('rekening.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('rekening.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
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
