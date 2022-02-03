<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['nm_donatur','email','telepon','tanggal','nominal','keterangan','cover'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['nm_donatur','email','telepon','tanggal','nominal','keterangan','cover'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/donasi/' . $this->cover))) {
            return asset('image/donasi/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/donasi/' . $this->cover))) {
            return unlink(public_path('image/donasi/' . $this->cover));
        }
    }
}
