<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    //memberikan akses data apa saja yang bisa dilihat
    protected $visible=['visi','misi','cover'];

    //memberikan akses dat apa saja yang bisa diisi
    protected $fillable=['visi','misi','cover'];

    //mencatat waktu pembuatan dan update data otomatis
    public $timestamps=true;

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/about/' . $this->cover))) {
            return asset('image/about/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/about/' . $this->cover))) {
            return unlink(public_path('image/about/' . $this->cover));
        }

    }
}
