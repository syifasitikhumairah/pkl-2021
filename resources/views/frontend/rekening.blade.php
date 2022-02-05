@extends('layouts.frontend')
@section('content')
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
            </div>
        </div>
    </div>
@endsection
