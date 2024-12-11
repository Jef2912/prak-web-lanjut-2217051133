<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run()
    {
        // Data kelas yang ingin diinsert
        $data = [
        'A', 
        'B', 
        'C', 
        'D', 
    ];

        // Looping untuk insert data kelas
        foreach ($data as $kelas) {
            Kelas::create([
                'nama_kelas' => $kelas,
            ]);
        }
    }
}