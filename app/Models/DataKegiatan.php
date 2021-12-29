<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKegiatan extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['judul','tanggal','gambar'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable=['judul','tanggal','gambar'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/kegiatan/' . $this->gambar))) {
            return asset('images/kegiatan/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/kegiatan/' . $this->gambar))) {
            return unlink(public_path('images/kegiatan/' . $this->gambar));
        }

    }
}