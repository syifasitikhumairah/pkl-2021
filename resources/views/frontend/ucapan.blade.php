@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">
                <center>Mengucapkan Terima Kasih</center>
            </h5>
            <div class="card-body">
                <h5 class="card-title">
                    <center>Terimakasih atas donasi yang telah Anda berikan, <br>Insya Allah donasi akan kami
                        sampaikan kepada orang-orang yang membutuhkan.</center>
                </h5>
                <p class="card-text">
                    <center>Semoga menjadi Amal Jariyah dan Allah memberi keberkahan atas apa yang Anda
                        berikan.</center>
                </p>
                <center>
                    <a href="{{ route('createDonasi') }}" class="btn btn-primary">Donasi Lagi</a>
                    <a href="/" class="btn btn-primary">Kembali</a>
                </center>
            </div>
        </div>
    </div>
@endsection
