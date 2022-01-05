<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use App\Models\Konfirmasi;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // mengambil data 'Konfirmasi' dan juga 'Donasi'
        // yang berelasi melalui method 'Donasi'
        // yang berasal dari model 'Konfirmasi'
        $konfirmasi = Konfirmasi::with('donasi')->get();
        return view('konfirmasi.index', compact('konfirmasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //mengambil data donasi
        $konfirmasi = Konfirmasi::with('donasi')->get();
        return view('konfirmasi.create', compact('donasi'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_donasi' => 'required',
            'nm_donatur' => 'required',
        ]);

        $konfirmasi = new DataDonasi;
        $konfirmasi->id_donasi = $request->id_donasi;
        $konfirmasi->nm_donatur = $request->nm_donatur;
        $konfirmasi->save();
        return redirect()->route('konfirmasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konfirmasi $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $konfirmasi = Konfirmasi::findOrFail($id);
        return view('konfirmasi.show', compact('konfirmasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konfirmasi $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $konfirmasi = Konfirmasi::findOrFail($id);
        $donasi = Donasi::all();
        return view('konfirmasi.edit', compact('konfirmasi', 'donasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Konfirmasi $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $request->validate([
            'id_donasi' => 'required',
            'nm_donatur' => 'required',
        ]);

        $konfirmasi = Konfirmasi::findOrFail($id);
        $konfirmasi->id_donasi = $request->id_donasi;
        $konfirmasi->nm_donatur = $request->nm_donatur;
        $konfirmasi->save();
        return redirect()->route('konfirmasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konfirmasi $konfirmasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $konfirmasi = Konfirmasi::findOrFail($id);
        $konfirmasi->delete();
        return redirect()->route('konfirmasi.index');
    }
}
