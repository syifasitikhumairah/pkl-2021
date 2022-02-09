@extends('layouts.frontend')
@section('content')
    <div class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Rekening Donasi</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Bank</th>
                                        <th>Rekening</th>
                                        <th>Atas Nama</th>
                                        <th>Link Internet Bangking</th>
                                    </tr>
                                    <tr>
                                        <th>1</th>
                                        <td>BCA</td>
                                        <td>2828 555 222</td>
                                        <td>YAYASAN PONDOK YATIM</td>
                                        <td><a href="https://www.klikbca.com/">Klik disini</a></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>BSI</td>
                                        <td>7666666617</td>
                                        <td>PONDOK YATIM</td>
                                        <td><a href="https://bsinet.bankbsi.co.id/cms/index.php">Klik disini</a></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Mandiri</td>
                                        <td>132 004 118 5555</td>
                                        <td>YAY PONDOK YATIM</td>
                                        <td><a href="https://ibank.bankmandiri.co.id/retail3/">Klik disini</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="section-title">
                        <h2>Donasi</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card" color="green">
                                <div class="card-body">
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
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for=""><b>No Telepon</b></label>
                                            <input type="number" name="telepon"
                                                class="form-control @error('telepon') is-invalid @enderror">
                                            @error('telepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for=""><b>Tanggal</b></label>
                                            <input type="date" name="tanggal"
                                                class="form-control @error('tanggal') is-invalid @enderror">
                                            @error('tanggal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
                                            <textarea name="keterangan"
                                                placeholder="(Pesan atau do'a yang akan disampaikan...)"
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
                                            <input type="file" name="cover"
                                                class="form-control @error('cover') is-invalid @enderror">
                                            @error('cover')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-outline-primary">KIRIM</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
