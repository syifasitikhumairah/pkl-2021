@extends('layouts.frontend')
@section('content')
    <div class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Donasi</h2>
            </div>
            <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info" style="background:#5cb87525">
                        <table class="table" style="font-size: 13px;">
                            <tr>
                                <th>No</th>
                                <th>Bank</th>
                                <th>Rekening</th>
                                <th>Atas Nama</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach ($rekening as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->bank }}</td>
                                    <td>{{ $data->rekening }}</th>
                                    <td>{{ $data->as }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <div class="info">
                        <form action="{{ route('storeDonasi') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for=""><b>Nama Donatur</b></label>
                                <input type="text" name="nm_donatur"
                                    class="form-control @error('nm_donatur') is-invalid @enderror">
                                @error('nm_donatur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Email</b></label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for=""><b>No Telepon</b></label>
                                    <input type="number" name="telepon"
                                        class="form-control @error('telepon') is-invalid @enderror">
                                    @error('telepon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for=""><b>Tanggal</b></label>
                                    <input type="date" name="tanggal"
                                        class="form-control @error('tanggal') is-invalid @enderror">
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Nominal</b></label>
                                <input type="number" name="nominal" placeholder="Rp. "
                                    class="form-control @error('nominal') is-invalid @enderror">
                                @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Keterangan</b></label>
                                <textarea name="keterangan" rows="3"
                                    placeholder="(-- Pesan atau do'a yang akan disampaikan --)"
                                    class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for=""><b>Foto Bukti Transfer</b></label>
                                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-primary"
                                    style="background:#5cb874; border-color: #5cb874; color: white;">KIRIM</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        @endsection
