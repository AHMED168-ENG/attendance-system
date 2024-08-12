<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 500; $i++) {
            DB::table('attendance')->insert([
                'name' => $faker->name,
                'attended_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
