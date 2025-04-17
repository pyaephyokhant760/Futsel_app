<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 100; $i++) {
            DB::table('matches')->insert([
                'goal_id' => $faker->numberBetween(1, 50),
                'home_team'   => $faker->numberBetween(1, 10),
                'away_team' => $faker->numberBetween(1, 10),  // ensure you have coach IDs 1–10
                'league_id'   => $faker->numberBetween(1, 5),    // ensure you have league IDs 1–5   // ensure you have player IDs 1–50
                'date'        => Carbon::now()->addDays(rand(-5, 30))->format('Y-m-d'),
                'time'        => Carbon::now()->addHours(rand(0, 24))->format('H:i:s'),
                'location'    => 'Stadium ' . chr(rand(65, 90)),
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
