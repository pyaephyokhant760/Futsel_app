<?php

namespace Database\Seeders;

use App\Models\Team;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 0; $i < 100; $i++) {
        //     $randomPlayerIds = [];

        //     // get 5 unique random player IDs between 1 and 50 (adjust range as needed)
        //     while (count($randomPlayerIds) < 5) {
        //         $id = rand(1, 50);
        //         if (!in_array($id, $randomPlayerIds)) {
        //             $randomPlayerIds[] = $id;
        //         }
        //     }

        //     Team::create([
        //         'team_name'   => 'Team ' . chr(65 + $i),
        //         'home_ground' => 'Stadium ' . chr(65 + $i),
        //         'coach_id'    => rand(1, 10),
        //         'league_id'   => rand(1, 5),
        //         'player_ids'  => json_encode($randomPlayerIds), // store as JSON array
        //         'scores'      => rand(10, 50) . ' pts',
        //         'logo'        => 'logo_' . $i . '.png',
        //     ]);
        // }
        $faker = Faker::create();

        for ($i = 1; $i <= 50; $i++) {
            DB::table('teams')->insert([
                'team_name'   => $faker->unique()->company . ' FC',
                'home_ground' => $faker->city . ' Stadium',
                'coach_id'    => $faker->numberBetween(1, 10),   // ensure you have coach IDs 1–10
                'league_id'   => $faker->numberBetween(1, 5),    // ensure you have league IDs 1–5   // ensure you have player IDs 1–50
                'logo'        => 'logos/' . Str::slug($faker->unique()->company, '_') . '.png',
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
