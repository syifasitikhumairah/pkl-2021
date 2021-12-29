<?php

namespace App\Http\Controllers;
use App\Models\DataKegiatan;
use Illuminate\Http\Request;

class DataKegiatanController extends Controller
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
        $kegiatan = DataKegiatan::all();
        return view('data_kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_kegiatan.create');
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
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $kegiatan = new DataKegiatan;
        $kegiatan->judul = $request->judul;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->gambar = $request->gambar;
        $kegiatan->save();
        return redirect()->route('data_kegiatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataKegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kegiatan = DataKegiatan::findOrFail($id);
        return view('admin.data_kegiatan.show', compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataKegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kegiatan = DataKegiatan::findOrFail($id);
        return view('admin.data_kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataKegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $validated = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        $kegiatan = DataKegiatan::findOrFail($id);
        $kegiatan->judul = $request->judul;
        $kegiatan->tanggal = $request->tanggal;
        $kegiatan->gambar = $request->gambar;
        $kegiatan->save();
        return redirect()->route('data_kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataKegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kegiatan = DataKegiatan::findOrFail($id);
        $kegiatan->deleteImage();
        $kegiatan->delete();
        return redirect()->route('data_kegiatan.index');
    }
}
