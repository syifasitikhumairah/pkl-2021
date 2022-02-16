<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Alert;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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
            'foto' => 'required|image|max:2048',

        ]);

        $galeri = new Galeri;
        $galeri->judul = $request->judul;
        // upload image
        if ($request->hasFile('foto')){
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/galeri/', $name);
            $galeri->foto = $name;
        }
        $galeri->save();
        Alert::success('Sukses', 'Data Berhasil di Isi');
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $validated = $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|max:2048',

        ]);

        $galeri = new Galeri;
        $galeri->judul = $request->judul;
        // upload image
        if ($request->hasFile('foto')){
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/galeri/', $name);
            $galeri->foto = $name;
        }
        $galeri->save();
        Alert::success('Sukses', 'Data Berhasil di Ubah');
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Galeri::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect()->route('galeri.index');
    }
}
