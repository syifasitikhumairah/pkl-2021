<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['nm_anak','tempat_lahir','tgl_lahir','jk','pendidikan','nm_wali','alamat','cover'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable=['nm_anak','tempat_lahir','tgl_lahir','jk','pendidikan','nm_wali','alamat','cover'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/anaks/' . $this->cover))) {
            return asset('image/anaks/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }
     
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/anaks/' . $this->cover))) {
            return unlink(public_path('image/anaks/' . $this->cover));
        }
    }
}
