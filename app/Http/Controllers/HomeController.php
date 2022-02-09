<?php

namespace App\Http\Controllers;
use App\Models\DataKegiatan;
use App\Models\Donasi;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function kegiatannya()
    {

        $kegiatan = DataKegiatan::all();
        return view('frontend.kegiatan', compact('kegiatan'));

    }

    public function donasi()
    {
        return view('frontend.donasi');

    }

    public function storeDonasi(Request $request)
    {
        $validated = $request->validate([
            'nm_donatur' => 'required',
            'email' => 'required|email:dns',
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
        Session::flash("flash_notification", [
            "level" => "succes",
            "message" => "Data saved successfully",
        ]);
        return redirect()->route('createDonasi');
    }


}
