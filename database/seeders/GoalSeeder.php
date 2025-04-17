<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();
        // foreach (range(1, 100) as $i) {
        //     $matchId = $faker->randomElement($matchIds);

        //     Goal::create([
                
        //     ]);
        // }
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('goals')->insert([
                'minute' => $faker->numberBetween(1, 95),
                'home_team_goal' => $faker->numberBetween(0, 5),
                'away_team_goal' => $faker->numberBetween(0, 5),
                'home_team_player_id' => $faker->numberBetween(1, 50),
                'away_team_player_id' => $faker->numberBetween(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
