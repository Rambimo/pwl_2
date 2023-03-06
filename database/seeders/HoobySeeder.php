<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoobySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobby')->insert([
            [
                'hobby' => 'Main Game',
                'alasan' => 'Mengisi Waktu Luang'
            ],
            [
                'hobby' => 'Mancing',
                'alasan' => 'Mendapatkan Ikan Untuk Lauk Makan'
            ],
            [
                'hobby' => 'Tidur',
                'alasan' => 'Merefresh Badan Ketika Lelah'
            ],
            [
                'hobby' => 'Futsal',
                'alasan' => 'Menyehatkan Badan'
            ]
        ]);
    }
}
