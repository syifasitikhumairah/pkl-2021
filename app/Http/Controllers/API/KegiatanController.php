<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
// use App\Models\DataAnak;
use App\Models\DataKegiatan;
// use App\Models\Donasi;
// use App\Models\Rekening;
// use App\Models\Galeri;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data_anak = DataAnak::all();
        // return response ()->json([
        //     'success' => true,
        //     'message' => 'Data Anak',
        //     'data' => $data_anak,
        // ], 200);

        $kegiatan = DataKegiatan::all();
        return response ()->json([
            'success' => true,
            'message' => 'Data Kegiatan',
            'data' => $kegiatan,
        ], 200);

        // $rekening = Rekening::all();
        // return response ()->json([
        //     'success' => true,
        //     'message' => 'Data Rekening',
        //     'data' => $rekening,
        // ], 200);

        // $galeri = Galeri::all();
        // return response ()->json([
        //     'success' => true,
        //     'message' => 'Galeri Foto',
        //     'data' => $galeri,
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
