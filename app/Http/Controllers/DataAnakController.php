<?php

namespace App\Http\Controllers;
use App\Models\DataAnak;
use Illuminate\Http\Request;

class DataAnakController extends Controller
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
        $anak = Anak::all();
        return view('admin.data_anak.index', compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_anak.create');
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
            'nm_anak' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'pendidikan' => 'required',
            'nm_wali' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $anak = new Anak;
        $anak->nm_anak = $request->nm_anak;
        $anak->tempat_lahir = $request->tempat_lahir;
        $anak->tgl_lahir = $request->tgl_lahir;
        $anak->jk = $request->jk;
        $anak->pendidikan = $request->pendidikan;
        $anak->nm_wali = $request->nm_wali;
        $anak->alamat = $request->alamat;
        $anak->foto = $request->foto;
        $anak->save();
        return redirect()->route('data_anak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataAnak  $anak
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anak = Anak::findOrFail($id);
        return view('admin.data_anak.show', compact('anak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataAnak  $anak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $anak = Anak::findOrFail($id);
        return view('admin.data_anak.edit', compact('anak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataAnak  $anak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $validated = $request->validate([
            'nm_anak' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'pendidikan' => 'required',
            'nm_wali' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|max:2048',
        ]);

        $anak = Anak::findOrFail($id);
        $anak->nm_anak = $request->nm_anak;
        $anak->tempat_lahir = $request->tempat_lahir;
        $anak->tgl_lahir = $request->tgl_lahir;
        $anak->jk = $request->jk;
        $anak->pendidikan = $request->pendidikan;
        $anak->nm_wali = $request->nm_wali;
        $anak->alamat = $request->alamat;
        // upload image / foto
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/anak/', $nm_anak);
            $datadonasi->foto = $nm_anak;
        }
        $anak->save();
        return redirect()->route('data_anak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataAnak  $anak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $anak = Anak::findOrFail($id);
        $anak->delete();
        return redirect()->route('data_anak.index');
    }
}
