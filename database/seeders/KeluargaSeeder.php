<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'nama' => 'Sugeng',
                'status' => 'Ayah',
                'jk' => 'L',
                'tgl_lahir' => '10 Maret 1974'
            ],
            [
                'nama' => 'Nuning Rosida',
                'status' => 'Ibu',
                'jk' => 'P',
                'tgl_lahir' => '14 Februari 1979'
            ],
            [
                'nama' => 'Rambimo Regeng Pangestu',
                'status' => 'Anak',
                'jk' => 'L',
                'tgl_lahir' => '02 Agustus 2001'
            ],
            [
                'nama' => 'Arjun Zain Regeng Pangestu',
                'status' => 'Anak',
                'jk' => 'L',
                'tgl_lahir' => '01 Agustus 2005'
            ],
            [
                'nama' => 'Thomas Regeng Pangestu',
                'status' => 'Anak',
                'jk' => 'L',
                'tgl_lahir' => '13 Maret 2013'
            ]
        ]);
    }
}
