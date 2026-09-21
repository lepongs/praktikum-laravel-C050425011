<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;
// use illuminate\Support\Facades\Validator;

class MatakuliahController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'kode_mk' => 'required|string|max:255',
            'id_dosen' => 'required|exists:users,id',
        ]);

        $data = [
            'kode_mk' => $request->kode_mk,
            'id_dosen' => $request->id_dosen,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester
        ];

        // dd($data);
        Matakuliah::create($data);

        return redirect()
            ->route('matakuliah')
            ->with('success', 'Mata kuliah berhasil ditambahkan.');
        } 
}
