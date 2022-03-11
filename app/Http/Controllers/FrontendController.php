<?php

namespace App\Http\Controllers;
use App\Models\DataKegiatan;
use App\Models\Donasi;
use App\Models\Galeri;
use App\Models\About;
use Illuminate\Http\Request;
use Session;
use Alert;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function about()
    {
        $about = About::orderBy('created_at', 'desc')->take(1)->get();
        return view('frontend.index', compact('about'));

    }

    public function kegiatannya()
    {
        $kegiatan = DataKegiatan::orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.kegiatan', compact('kegiatan'));

    }

    public function kegiatanall()
    {
        $kegiatan = DataKegiatan::all();
        return view('frontend.kegiatanall', compact('kegiatan'));

    }

    // public function detailKegiatan($id)
    // {
    //     //
    //     $kegiatan = DataKegiatan::findOrFail($id);
    //     return view('frontend.detailKegiatan', compact('kegiatan'));
    // }

    public function galeriall()
    {
        $galeri = Galeri::all();
        return view('frontend.galeri', compact('galeri'));

    }

    // public function galerihome()
    // {
    //     $galeri = Galeri::orderBy('created_at', 'desc')->take(3)->get();
    //     return view('frontend.index', compact('galeri'));

    // }

    public function donasi()
    {
        return view('frontend.donasi');

    }

    public function storeDonasi(Request $request)
    {
        $validated = $request->validate([
            'nm_donatur' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'tanggal' => 'required',
            'nominal' => 'required',
            'cover'=>'required|image|max:2048',
        ]);

        $donasi = new Donasi;
        $donasi->nm_donatur = $request->nm_donatur;
        $donasi->email = $request->email;
        $donasi->telepon = $request->telepon;
        $donasi->tanggal = $request->tanggal;
        $donasi->nominal = $request->nominal;
        $donasi->keterangan = $request->keterangan ;
       // upload image / foto
       if ($request->hasFile('cover')) {
        $image = $request->file('cover');
        $name = rand(1000, 9999) . $image->getClientOriginalName();
        $image->move('image/donasi/', $name);
        $donasi->cover = $name;
        }
        $donasi->save();
        Alert::success('Donasi Berhasil', 'Terimakasih atas donasi yang telah Anda berikan, Insya Allah donasi akan kami
        sampaikan kepada orang-orang yang membutuhkan.');
        Session::flash("flash_notification", [
            "level" => "succes",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('createDonasi');
    }

}
