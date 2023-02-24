<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TeleponSeeder extends Seeder
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

        for($i = 1; $i < 100; $i++) {
            DB::table('telepon')->insert([
                'nomor_telepon' => $faker->phoneNumber,
                'pengguna_id' => $i,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ]);
        }
    }
}
