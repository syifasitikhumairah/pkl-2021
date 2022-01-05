<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('donasi.index', compact('donasi'));
    }
    public function create()
    {
        return view('donasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi data
        $validated = $request->validate([
            'nm_donatur' => 'required',
            'nominal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'norek' => 'required',
            'nm_bank' => 'required',
            'pemilik_rek' => 'required',
            'telepon' => 'required',
            
        ]);

        $donasi = new Donasi;
        $donasi->nm_donatur = $request->nm_donatur;
        $donasi->nominal = $request->nominal;
        $donasi->tanggal = $request->tanggal;
        $donasi->keterangan = $request->keterangan;
        $donasi->norek = $request->norek;
        $donasi->nm_bank = $request->nm_bank;
        $donasi->pemilik_rek = $request->pemilik_rek;
        $donasi->telepon = $request->telepon;
        $donasi->save();
        return redirect()->route('donasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $donasi = Donasi::findOrFail($id);
        return view('donasi.show', compact('donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $donasi = Donasi::findOrFail($id);
        return view('donasi.edit', compact('donasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $validated = $request->validate([
            'nm_donatur' => 'required',
            'nominal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'norek' => 'required',
            'nm_bank' => 'required',
            'pemilik_rek' => 'required',
            'telepon' => 'required',
            
        ]);

        $donasi = Donasi::findOrFail($id);
        $donasi->nm_donatur = $request->nm_donatur;
        $donasi->nominal = $request->nominal;
        $donasi->tanggal = $request->tanggal;
        $donasi->keterangan = $request->keterangan;
        $donasi->norek = $request->norek;
        $donasi->nm_bank = $request->nm_bank;
        $donasi->pemilik_rek = $request->pemilik_rek;
        $donasi->telepon = $request->telepon;
        $donasi->save();
        return redirect()->route('donasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $donasi = Donasi::findOrFail($id);
        $donasi->delete();
        return redirect()->route('donasi.index');
    }
}
