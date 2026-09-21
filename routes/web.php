<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $data = Mahasiswa::all();
    return view('mahasiswa', compact('data'));
});

Route::get('/matakuliah', function () {
    $data = Matakuliah::with('user')->get();
    return view('matakuliah', compact('data'));
})->name('matakuliah');

Route::get('/matakuliah/add', function () {
    $data = Matakuliah::with('user')->get();
    return view('add_mk', compact('data'));
})->name('matakuliah.add');

Route::post('/matakuliah/store', [MatakuliahController::class, 'store'])->name('matakuliah.store');


