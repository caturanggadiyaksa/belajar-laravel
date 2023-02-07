<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Insert data ke table pegawai
        DB::table('tablepegawai')->insert([
            'nama' => 'joni',
            'jabatan' => 'web designer',
            'umur' => 25,
            'alamat' => 'Jl. Panglateh'
        ]);
    }
}
