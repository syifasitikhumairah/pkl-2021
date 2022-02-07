<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataAnakController;
use App\Http\Controllers\DataKegiatanController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(
    [
    'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hanya untuk role admin
Route::group(['prefix' => 'admin','middleware' => ['auth','role:admin']], function(){
    Route::get('/', function(){
        return 'halaman admin';
    });

    Route::get('profile', function(){
        return 'halaman profile admin';
    });
});

// Route menampilkan fitur Data Anak, Data Kegiatan, dan Data Donasi
Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){
    Route::get('data_anak', function(){
        return view('data_anak.index');
    })->middleware(['role:admin']);

    Route::get('data_kegiatan', function(){
        return view('data_kegiatan.index');
    })->middleware(['role:admin']);

    Route::get('donasi', function(){
        return view('donasi.index');
    })->middleware(['role:admin']);

    Route::resource('data_anak', DataAnakController::class);
    Route::resource('data_kegiatan', DataKegiatanController::class);
    Route::resource('donasi', DonasiController::class);

});

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('rekening', function () {
    return view('frontend.rekening');
});

Route::get('ucapan', function () {
    return view('frontend.ucapan');
});

Route::get('kegiatan', 'App\Http\Controllers\HomeController@kegiatannya', function () {
    return view('frontend.kegiatan');
});

Route::get('donasi/create', 'App\Http\Controllers\HomeController@donasi', function () {
    return view('frontend.donasi');
})->name('createDonasi');

Route::post('donasi', [App\Http\Controllers\HomeController::class, 'storeDonasi'])->name('storeDonasi');

