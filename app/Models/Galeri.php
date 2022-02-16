<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['judul','foto'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable=['judul','foto'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    public function image()
    {
        if ($this->foto && file_exists(public_path('image/galeri/' . $this->foto))) {
            return asset('image/galeri/' . $this->foto);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('image/galeri/' . $this->foto))) {
            return unlink(public_path('image/galeri/' . $this->foto));
        }

    }
}
