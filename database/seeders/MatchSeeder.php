<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Match::factory(10)->create();
        // \App\Models\Match::factory()->create([
        //     'home_team' => 'Team A',
        //     'away_team' => 'Team B',
        //     'league_id' => 1,
        //     'date' => '2025-04-13',
        //     'time' => '15:00:00',
        //     'location' => 'Stadium A',
        //     'home_score' => 2,
        //     'away_score' => 1,
        // ]);
        {
            for ($i = 0; $i < 100; $i++) {
                do {
                    $home = rand(1, 100); // Assuming 10 teams
                    $away = rand(1, 100);
                } while ($home === $away); // prevent same team match
    
                DB::table('matches')->insert([
                    'home_team'   => $home,
                    'away_team'   => $away,
                    'league_id'   => rand(1, 5), // Assuming 5 leagues
                    'date'        => Carbon::now()->addDays(rand(-5, 30))->format('Y-m-d'),
                    'time'        => Carbon::now()->addHours(rand(0, 24))->format('H:i:s'),
                    'location'    => 'Stadium ' . chr(rand(65, 90)),
                    'home_score'  => rand(0, 5),
                    'away_score'  => rand(0, 5),
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ]);
            }
        }
    }
}
