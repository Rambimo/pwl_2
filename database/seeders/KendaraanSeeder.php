<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'no_pol' => 'R 4 MB',
                'merk' => 'Yamaha',
                'jenis' => 'Mio GT',
                'thn_buat' => '2012',
                'warna' => 'Merah'
            ],
            [
                'no_pol' => 'B 1 MO',
                'merk' => 'Honda',
                'jenis' => 'Vario',
                'thn_buat' => '2023',
                'warna' => 'Hitam'
            ]
        ]);
    }
}
