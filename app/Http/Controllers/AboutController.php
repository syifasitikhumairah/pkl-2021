<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;
use Alert;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $about = About::all();
        return view('frontend.about', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
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
            'visi' => 'required',
            'misi' => 'required',
            'cover' => 'required|image|max:2048',

        ]);

        $about = new About;
        $about->visi = $request->visi;
        $about->misi = $request->misi;
        // upload image
        if ($request->hasFile('cover')){
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/about/', $name);
            $about->cover = $name;
        }
        $about->save();
        Alert::success('Sukses', 'Data Berhasil Diisi');
        return redirect()->route('about.index');
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
        $about = About::findOrFail($id);
        return view('about.show', compact('about'));
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
        $about = About::findOrFail($id);
        return view('about.edit', compact('about'));
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
            'visi' => 'required',
            'misi' => 'required',
            'cover' => 'required|image|max:2048',
        ]);

        $about = About::findOrFail($id);
        $about->visi = $request->visi;
        $about->misi = $request->misi;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $about->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/about/', $name);
            $about->cover = $name;
        }
        $about->save();
        Alert::success('Sukses', 'Data Berhasil Diubah');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!About::destroy($id)) {
            return redirect()->back();
        }
        Alert::success('Sukses', 'Data Berhasil Dihapus');
        return redirect()->route('about.index');
    }
}
