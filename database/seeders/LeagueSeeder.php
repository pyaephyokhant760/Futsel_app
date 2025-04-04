<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leagues = [
            ['name' => 'Premier League'],
            ['name' => 'La Liga'],
            ['name' => 'Bundesliga'],
            ['name' => 'Serie A'],
            ['name' => 'Ligue 1'],
            ['name' => 'Eredivisie'],
            ['name' => 'Primeira Liga'],
            ['name' => 'Major League Soccer'],
            ['name' => 'A-League'],
            ['name' => 'J1 League'],
            ['name' => 'Chinese Super League'],
            ['name' => 'Indian Super League'],
            ['name' => 'Saudi Pro League'],
            ['name' => 'Qatar Stars League'],
            ['name' => 'UAE Pro League'],
            ['name' => 'K League 1'],
            ['name' => 'Thai League 1'],
            ['name' => 'Vietnamese V.League 1'],
            ['name' => 'Philippine Football League'],
            ['name' => 'Malaysian Super League'],
            ['name' => 'Singapore Premier League'],
            ['name' => 'Indonesian Liga 1'],
            ['name' => 'Myanmar National League'],
            ['name' => 'Cambodian League'],
            ['name' => 'Lao Premier League'],
        ];
        foreach ($leagues as $league) {
            League::create([
                'name' => $league['name'],
            ]);
        }
    }
}
