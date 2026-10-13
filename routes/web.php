<?php

use App\Http\Controllers\HitungTotalSksController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
    });

Route::get('/latihan', [LatihanController::class, 'index']);

Route::prefix('akademik')->group(function () {
    Route::prefix('mahasiswa')->group(function () {
        Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa');
        Route::get('/total', [MahasiswaController::class, 'total']);
        Route::get('/cari', function () {
            return view('halaman-cari');
        });
        Route::get('/cari-mahasiswa', [MahasiswaController::class, 'cariMahasiswa']);
    });
    
    Route::resource('matakuliah', MatakuliahController::class);
    Route::get('/total-sks', HitungTotalSksController::class);
    
    // Route::get('/matakuliah', function () {
    //     $data = Matakuliah::with('user')->get();
    //     return view('matakuliah', compact('data'));
    // })->name('matakuliah');

    // Route::get('/matakuliah/add', function () {
    //     $data = Matakuliah::with('user')->get();
    //     return view('add_mk', compact('data'));
    // })->name('matakuliah.add');

    // Route::post('/matakuliah/store', [MatakuliahController::class, 'store'])->name('matakuliah.store');

    Route::get('/tentang', function() {
        return "Ini adalah halaman tentang!";
        });
        
    Route::get('/profil', function() {
        // return "Ini adalah halaman profil!";
        return view('profil')->with([
            'nama' => 'Muhammad Maulidhan Pahlevi',
            'nim' => 'C050425011',
            'prodi' => 'Sistem Informasi Kota Cerdas',
            ]);
    });

    Route::get('/kontak', function() {
        return "Ini adalah halaman kontak!";
    });

//     Route::get('/matakuliah/index', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    
//     Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])->name('matakuliah.show');
});

