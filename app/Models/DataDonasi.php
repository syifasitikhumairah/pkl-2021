<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDonasi extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['id_donasi','nm_donatur','nominal','tanggal','keterangan','norek','nm_bank','pemilik_rek','telepon'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable =['id_donasi','nm_donatur','nominal','tanggal','keterangan','norek','nm_bank','pemilik_rek','telepon'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    //membuat relasi one to many
    public function donasi(){
        // data dari model "Data Donasi" bisa dimiliki oleh model "Donasi"
        // melalui fk "id_donasi"
        return $this->belongsTo('App\Models\Donasi', 'id_donasi');
    }
}
