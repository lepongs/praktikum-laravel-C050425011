<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    // use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matakuliah::factory(20)->create();
        
        // Matakuliah::create([
        //     'kode_mk' => 'MK001',
        //     'id_dosen' => '1',
        //     'nama_mk' => 'Pemrograman Berbasis Web',
        //     'sks' => '3',
        //     'semester' => '3',
        // ]);
    }
}
