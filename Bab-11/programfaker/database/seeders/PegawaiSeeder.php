<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            //insert data ke table pegawai
            DB::table('tablepegawai')->insert([
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'umur' => $faker->numberBetween(25,40),
                'alamat' => $faker->address

            ]);
        }
    }
}
