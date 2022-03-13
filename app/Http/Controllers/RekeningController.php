<?php

namespace App\Http\Controllers;
use App\Models\Rekening;
use Illuminate\Http\Request;
use Alert;


class RekeningController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening = Rekening::all();
        return view('rekening.index', compact('rekening'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekening.create');
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
            'bank' => 'required',
            'rekening' => 'required',
            'as' => 'required',

        ]);

        $rekening = new Rekening;
        $rekening->bank = $request->bank;
        $rekening->rekening = $request->rekening;
        $rekening->as = $request->as;
        $rekening->save();
        Alert::success('Sukses', 'Data Berhasil Diisi');
        return redirect()->route('rekening.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rekening = Rekening::findOrFail($id);
        return view('rekening.show', compact('rekening'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rekening = Rekening::findOrFail($id);
        return view('rekening.edit', compact('rekening'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $validated = $request->validate([
            'bank' => 'required',
            'rekening' => 'required',
            'as' => 'required',
        ]);

        $rekening = Rekening::findOrFail($id);
        $rekening->bank = $request->bank;
        $rekening->rekening = $request->rekening;
        $rekening->as = $request->as;
        $rekening->save();
        Alert::success('Sukses', 'Data Berhasil Diubah');
        return redirect()->route('rekening.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekening  $rekening
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!Rekening::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect()->route('rekening.index');
    }
}
