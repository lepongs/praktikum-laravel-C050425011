<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
    });
    
Route::prefix('akademik')->group(function () {
    Route::get('/mahasiswa', function () {
        $data = Mahasiswa::all();
        return view('mahasiswa', compact('data'));
    })->name('mahasiswa');
    
    Route::resource('matakuliah', MatakuliahController::class)->only(['index', 'create', 'show', 'store']);
    
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
        return "Ini adalah halaman profil!";
    });

    Route::get('/kontak', function() {
        return "Ini adalah halaman kontak!";
    });

//     Route::get('/matakuliah/index', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    
//     Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])->name('matakuliah.show');
});

