<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['nm_anak','tempat_lahir','tgl_lahir','jk','pendidikan','nm_wali','alamat','foto'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable=['nm_anak','tempat_lahir','tgl_lahir','jk','pendidikan','nm_wali','alamat','foto'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    public function image()
    {
        if ($this->foto && file_exists(public_path('images/anak/' . $this->foto))) {
            return asset('images/anak/' . $this->foto);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/anak/' . $this->foto))) {
            return unlink(public_path('images/anak/' . $this->foto));
        }

    }

}
