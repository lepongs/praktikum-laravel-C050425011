<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use illuminate\Support\Facades\Validator;

class MatakuliahController extends Controller
{
    public function index() {
        // return "Halaman seluruh matakuliah";
        // DB::enableQueryLog();
        $data = Matakuliah::with('user')->get();
        // dd(DB::getQueryLog());
        return view('matakuliah.index', compact('data'));
    }

    public function create() {
        $data = Matakuliah::with('user')->get();
        return view('matakuliah.add', compact('data'));
    }

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
            ->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil ditambahkan.');
    }
    
    public function show(Matakuliah $matakuliah) {
        $matakuliah->load('nilai_mk.mahasiswa');
        return view('matakuliah.show_mk', compact('matakuliah'));
    }
        
    public function edit(Matakuliah $matakuliah) {
        $dosens = User::all();
        return view('matakuliah.edit', compact('matakuliah', 'dosens'));
    }

    public function update(Request $request, Matakuliah $matakuliah) {
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
        $matakuliah->update($data);
        
        return redirect()
            ->route('matakuliah.index')
            ->with('success', 'Mata kuliah berhasil diedit.');
    }
    
    public function destroy(Matakuliah $matakuliah) {
        // dd($matakuliah);
        $matakuliah->delete();
        return redirect()
            ->route('matakuliah.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
