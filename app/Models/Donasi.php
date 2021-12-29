<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nm_donatur','nominal','tanggal','keterangan','norek','nm_bank','pemilik_rek','telepon'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nm_donatur','nominal','tanggal','keterangan','norek','nm_bank','pemilik_rek','telepon'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    // membuat relasi one to many
    public function datadonasi(){
        // data dari model "Donasi" bisa memiliki banyak data 
        // dari model "Data Donasi" melalui fk "id_donasi"
        $this->hasMany('App\Models\DataDonasi', 'id_donasi');
    }
}
