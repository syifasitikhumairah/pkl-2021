<?php

namespace App\Http\Controllers;
use Session;
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
        $data_anak = DataAnak::all();
        return view('data_anak.index', compact('data_anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_anak.create');
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
        ]);

        $data_anak = new DataAnak;
        $data_anak->nm_anak = $request->nm_anak;
        $data_anak->tempat_lahir = $request->tempat_lahir;
        $data_anak->tgl_lahir = $request->tgl_lahir;
        $data_anak->jk = $request->jk;
        $data_anak->pendidikan = $request->pendidikan;
        $data_anak->nm_wali = $request->nm_wali;
        $data_anak->save();
        Session::flash("flash_notification", [
            "level" => "succes",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('data_anak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataAnak  $data_anak
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data_anak = DataAnak::findOrFail($id);
        return view('data_anak.show', compact('data_anak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataAnak  $data_anak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data_anak = DataAnak::findOrFail($id);
        return view('data_anak.edit', compact('data_anak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataAnak  $data_anak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $validated = $request->validate([
            'nm_anak' => 'required|alpha',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'pendidikan' => 'required',
            'nm_wali' => 'required',
        ]);

        $data_anak = DataAnak::findOrFail($id);
        $data_anak->nm_anak = $request->nm_anak;
        $data_anak->tempat_lahir = $request->tempat_lahir;
        $data_anak->tgl_lahir = $request->tgl_lahir;
        $data_anak->jk = $request->jk;
        $data_anak->pendidikan = $request->pendidikan;
        $data_anak->nm_wali = $request->nm_wali;
        $data_anak->save();
        Session::flash("flash_notification", [
            "level" => "succes",
            "message" => "Data edited successfully",
        ]);
        return redirect()->route('data_anak.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataAnak  $data_anak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!DataAnak::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level" => "succes",
            "message" => "Data deleted successfully"
        ]);
        return redirect()->route('data_anak.index');
    }
}

