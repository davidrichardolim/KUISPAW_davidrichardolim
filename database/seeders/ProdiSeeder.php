<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
                'nama_prodi' => 'Teknik Informatika',
                'nama_kaprodi' => 'Dr. Ir. Budi Santoso, M.T.',
                'alias_prodi' => 'TI',
            ],
            [
                'nama_prodi' => 'Akutansi',
                'nama_kaprodi' => 'Prof. Dr. Siti Rahayu, M.M.',
                'alias_prodi' => 'AK',
            ],
            [
                'nama_prodi' => 'Sistem Informasi',
                'nama_kaprodi' => 'Dr. Ir. Wijang, S.Pd.',
                'alias_prodi' => 'SI',
            ],
        ];

        foreach ($prodis as $prodi) {
            $prodi['fakultas_id'] = Fakultas::inRandomOrder()->first()->id;

            Prodi::create($prodi);
        }
    }
}
