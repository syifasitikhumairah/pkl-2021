<?php

namespace App\Http\Controllers;
// use App\Models\Donasi;
use App\Models\DataDonasi;
use Illuminate\Http\Request;

class DataDonasiController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function index()
    // {
    //     // mengambil data 'Data Donasi' dan juga 'Donasi'
    //     // yang berelasi melalui method 'Donasi'
    //     // yang berasal dari model 'Data Donasi'
    //     $datadonasi = DataDonasi::with('donasi')->get();
    //     return view('data_donasi.index', compact('datadonasi'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(){
    //     //mengambil data donasi
    //     $donasi = Donasi::all();
    //     return view('data_donasi.create', compact('donasi'));
    //     }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'id_donasi' => 'required',
    //         'nm_donatur' => 'required',
    //         'nominal' => 'required',
    //         'tanggal' => 'required',
    //         'keterangan' => 'required',
    //         'norek' => 'required',
    //         'nm_bank' => 'required',
    //         'pemilik_rek' => 'required',
    //         'telepon' => 'required',
    //     ]);

    //     $datadonasi = new DataDonasi;
    //     $datadonasi->id_donasi = $request->id_donasi;
    //     $datadonasi->nm_donatur = $request->nm_donatur;
    //     $datadonasi->nominal = $request->nominal;
    //     $datadonasi->tanggal = $request->tanggal;
    //     $datadonasi->keterangan = $request->keterangan;
    //     $datadonasi->norek = $request->norek;
    //     $datadonasi->nm_bank = $request->nm_bank;
    //     $datadonasi->pemilik_rek = $request->pemilik_rek;
    //     $datadonasi->telepon = $request->telepon;
    //     $datadonasi->save();
    //     return redirect()->route('data_donasi.index');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\DataDonasi $datadonasi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    //    $datadonasi = DataDonasi::findOrFail($id);
    //     return view('data_donasi.show', compact('datadonasi'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\DataDonasi $datadonasi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    //     $datadonasi = DataDonasi::findOrFail($id);
    //     $donasi = Donasi::all();
    //     return view('data_donasi.edit', compact('datadonasi', 'donasi'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\DataDonasi $datadonasi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     // validasi data
    //     $request->validate([
    //         'id_donasi' => 'required',
    //         'nm_donatur' => 'required',
    //         'nominal' => 'required',
    //         'tanggal' => 'required',
    //         'keterangan' => 'required',
    //         'norek' => 'required',
    //         'nm_bank' => 'required',
    //         'pemilik_rek' => 'required',
    //         'telepon' => 'required',
    //     ]);

    //     $datadonasi = DataDonasi::findOrFail($id);
    //     $datadonasi->id_donasi = $request->id_donasi;
    //     $datadonasi->nm_donatur = $request->nm_donatur;
    //     $datadonasi->nominal = $request->nominal;
    //     $datadonasi->tanggal = $request->tanggal;
    //     $datadonasi->keterangan = $request->keterangan;
    //     $datadonasi->norek = $request->norek;
    //     $datadonasi->nm_bank = $request->nm_bank;
    //     $datadonasi->pemilik_rek = $request->pemilik_rek;
    //     $datadonasi->telepon = $request->telepon;
    //     $datadonasi->save();
    //     return redirect()->route('data_donasi.index');

    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\DataDonasi $datadonasi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    //     $datadonasi = DataDonasi::findOrFail($id);
    //     $datadonasi->delete();
    //     return redirect()->route('data_donasi.index');
    // }

}
