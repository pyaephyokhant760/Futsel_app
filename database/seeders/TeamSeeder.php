<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            $randomPlayerIds = [];

            // get 5 unique random player IDs between 1 and 50 (adjust range as needed)
            while (count($randomPlayerIds) < 5) {
                $id = rand(1, 50);
                if (!in_array($id, $randomPlayerIds)) {
                    $randomPlayerIds[] = $id;
                }
            }

            Team::create([
                'team_name'   => 'Team ' . chr(65 + $i),
                'home_ground' => 'Stadium ' . chr(65 + $i),
                'coach_id'    => rand(1, 10),
                'league_id'   => rand(1, 5),
                'player_ids'  => json_encode($randomPlayerIds), // store as JSON array
                'scores'      => rand(10, 50) . ' pts',
                'logo'        => 'logo_' . $i . '.png',
            ]);
        }
    }
}
