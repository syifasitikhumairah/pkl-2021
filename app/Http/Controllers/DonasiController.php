<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use Illuminate\Http\Request;
use Session;

class DonasiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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
    //     $validated = $request->validate([
    //         'nm_donatur' => 'required',
    //         'email' => 'required',
    //         'telepon' => 'required',
    //         'tanggal' => 'required',
    //         'nominal' => 'required',
    //         'keterangan' => 'required',
    //         'cover'=>'required|image|max:2048',

    //     ]);

    //     $donasi = new Donasi;
    //     $donasi->nm_donatur = $request->nm_donatur;
    //     $donasi->email = $request->email;
    //     $donasi->telepon = $request->telepon;
    //     $donasi->tanggal = $request->tanggal;
    //     $donasi->nominal = $request->nominal;
    //     $donasi->keterangan = $request->keterangan;
    //    // upload image / foto
    //    if ($request->hasFile('cover')) {
    //     $image = $request->file('cover');
    //     $name = rand(1000, 9999) . $image->getClientOriginalName();
    //     $image->move('image/donasi/', $name);
    //     $donasi->cover = $name;
    //     }

    //     $donasi->save();
    //     Session::flash("flash_notification", [
    //         "level" => "succes",
    //         "message" => "Data saved successfully",
    //     ]);
    //     return redirect()->route('donasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        // $donasi = Donasi::findOrFail($id);
        // return view('donasi.edit', compact('donasi'));
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
    //     $validated = $request->validate([
    //         'nm_donatur' => 'required',
    //         'email' => 'required',
    //         'telepon' => 'required',
    //         'tanggal' => 'required',
    //         'nominal' => 'required',
    //         'keterangan' => 'required',
    //         'cover'=>'required|image|max:2048',

    //     ]);

    //     $donasi = Donasi::findOrFail($id);
    //     $donasi->nm_donatur = $request->nm_donatur;
    //     $donasi->email = $request->email;
    //     $donasi->telepon = $request->telepon;
    //     $donasi->tanggal = $request->tanggal;
    //     $donasi->nominal = $request->nominal;
    //     $donasi->keterangan = $request->keterangan;
    //    // upload image / foto
    //    if ($request->hasFile('cover')) {
    //     $image = $request->file('cover');
    //     $name = rand(1000, 9999) . $image->getClientOriginalName();
    //     $image->move('image/donasi/', $name);
    //     $donasi->cover = $name;
    //     }
    //     $donasi->save();
    //     Session::flash("flash_notification", [
    //         "level" => "succes",
    //         "message" => "Data edited successfully",
    //     ]);
    //     return redirect()->route('donasi.index');
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
        Session::flash("flash_notification", [
            "level" => "succes",
            "message" => "Data deleted successfully",
        ]);
        return redirect()->route('donasi.index');
    }
}
