<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['bank','rekening','as'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['bank','rekening','as'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;
}
