<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKegiatan extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['judul','cover','tanggal'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable=['judul','cover','tanggal'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/kegiatan/' . $this->cover))) {
            return asset('image/kegiatan/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/kegiatan/' . $this->cover))) {
            return unlink(public_path('image/kegiatan/' . $this->cover));
        }

    }

}
