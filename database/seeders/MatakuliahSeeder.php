<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliah')->insert([
            [
                'kode_matkul' => '211004',
                'nm_matkul' => 'Matematika 1',
                
            ]
        ]);
    }
}
