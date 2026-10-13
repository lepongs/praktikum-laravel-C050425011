<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = Mahasiswa::all();
        // $data = DB::table('mahasiswas')->paginate(10);
        return view('mahasiswa.index', compact('data'))->with('pesan', '<script>alert("XSS")</script>');
    }
    
    /**
     * Show the form for creating a new resource.
    */
    public function create()
    {
        //
    }

        /**
     * Store a newly created resource in storage.
        */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        // DB::select('select * from mahasiswas where prodi = "Teknik Informatika"');
        // DB::table('mahasiswas')->where('prodi', 'Teknik Informatika')->get();
        // Mahasiswa::where('prodi', 'Teknik Informatika')->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
        }
        
        /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }

    public function cariMahasiswa(Request $request) {
        $nama = $request->query('nama');
        return "Hasil pencarian untuk nama : " . $nama;
    }

    public function total()
    {
        // DB::table('mahasiswas')
        //     ->where('prodi', 'Teknik Informatika')
        //     ->whereBetween('semester', [3, 6])
        //     ->orderBy('nama', 'asc')
        //     ->get();
        
        $data = DB::table('mahasiswas')->selectRaw('prodi, count(*) as jumlah')->groupBy('prodi')->get();
        return view('mahasiswa.total', compact('data'));
    }
}
