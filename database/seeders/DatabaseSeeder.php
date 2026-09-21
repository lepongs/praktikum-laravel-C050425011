<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MatakuliahSeeder::class,
        ]);

        // Mahasiswa::factory(50)->create();
        
        // User::factory()->create([
        //     'name' => 'Arifin Noor Asyikin, ST, MT',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(10)->create();

        // $this->call([
        //     MahasiswaSeeder::class,
        // ]);
    }
}
