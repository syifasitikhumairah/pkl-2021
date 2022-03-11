@extends('adminlte::page')

@section('title', 'Pondok Yatim | About')

@section('content_header')

    About

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#about').DataTable();
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
                        About
                        <a href="{{ route('about.create') }}"
                            class="btn btn-sm btn-outline-primary float-right">Tambah About</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="about">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $no=1; @endphp
                                @foreach ($about as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{!!$data->visi!!}</td>
                                        <td>{!!$data->misi!!}</td>
                                        <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:80px;"
                                                alt="Cover"></td>

                                        <td>
                                            <form action="{{ route('about.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('about.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('about.show', $data->id) }}"
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
