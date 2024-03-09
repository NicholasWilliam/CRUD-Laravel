<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\negara;
use App\Models\kota;
use App\Models\univ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        negara::create([
            'nama_negara' => 'Indonesia',
            'deskripsi_negara' => 'Indonesia merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#FF0000',
            'gambar_negara' => ''
        ]);
        negara::create([
            'nama_negara' => 'Malaysia',
            'deskripsi_negara' => 'Malaysia merupakan bagian dari ASEAN',
            'kodewarna_negara' => '#0032AO',
            'gambar_negara' => ''
        ]);
        
        kota::create([
            'negara_id' => 1,
            'nama_kota' => 'Pontianak',
            'deskripsi_kota' => 'Pontianak merupakan salah satu kota di Indonesia',
            'kodewarna_kota' => '#00ff4c',
            'gambar_kota' => 'gambarPTK'
        ]);
        kota::create([
            'negara_id' => 2,
            'nama_kota' => 'Kuala Lumpur',
            'deskripsi_kota' => 'Pontianak merupakan salah satu kota di Indonesia',
            'kodewarna_kota' => '#FFD100',
            'gambar_kota' => 'gambarKL'
        ]);

        univ::create([
           'negara_id' => 1,
           'kota_id' => 1,
           'nama_univ' => 'ITBSS',
           'alamat_univ' => 'Jalan Sutoyo'
        ]);
        univ::create([
            'negara_id' => 1,
            'kota_id' => 1,
            'nama_univ' => 'Binus',
            'alamat_univ' => 'Jalan bekasi'
         ]);
    }
}