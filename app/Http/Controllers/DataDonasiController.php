<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDonasiController extends Controller
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
        // mengambil data 'Data Donasi' dan juga 'Donasi'
        // yang berelasi melalui method 'Donasi'
        // yang berasal dari model 'Data Donasi'
        $datadonasi = DataDonasi::with('donasi')->get();
        return view('admin.data_donasi.index', compact('datadonasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //mengambil data donasi
        $donasi = Donasi::all();
        return view('admin.data_donasi.create', compact('donasi'));
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
            'nominal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'norek' => 'required',
            'nm_bank' => 'required',
            'pemilik_rek' => 'required',
            'telepon' => 'required',
        ]);

        $datadonasi = new DataDonasi;
        $datadonasi->title = $request->title;
        $datadonasi->author_id = $request->author_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/books/', $name);
            $datadonasi->cover = $name;
        }
        $datadonasi->amount = $request->amount;
        $datadonasi->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book $datadonasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $datadonasi = Book::findOrFail($id);
        return view('admin.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book $datadonasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datadonasi = Book::findOrFail($id);
        $author = Author::all();
        return view('admin.book.edit', compact('book', 'author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book $datadonasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        $request->validate([
            'id_donasi' => 'required',
            'nm_donatur' => 'required',
            'nominal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required',
            'norek' => 'required',
            'nm_bank' => 'required',
            'pemilik_rek' => 'required',
            'telepon' => 'required',
        ]);

        $datadonasi = Book::findOrFail($id);
        $datadonasi->title = $request->title;
        $datadonasi->author_id = $request->author_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $datadonasi->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/books/', $name);
            $datadonasi->cover = $name;
        }
        $datadonasi->amount = $request->amount;
        $datadonasi->save();
        return redirect()->route('books.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book $datadonasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $datadonasi = Book::findOrFail($id);
        $datadonasi->deleteImage();
        $datadonasi->delete();
        return redirect()->route('books.index');
    }

}
