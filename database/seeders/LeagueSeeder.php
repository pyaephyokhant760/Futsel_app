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
            ['name' => 'Premier League','season' => '2023/2024'],
            ['name' => 'Championship','season' => '2023/2024'],
            ['name' => 'League One','season' => '2023/2024'],
            ['name' => 'League Two','season' => '2023/2024'],
            ['name' => 'National League','season' => '2023/2024'],
            ['name' => 'Scottish Premiership','season' => '2023/2024'],
            ['name' => 'Scottish Championship','season' => '2023/2024'],
            ['name' => 'Scottish League One','season' => '2023/2024'],
            ['name' => 'Scottish League Two','season' => '2023/2024'],
            ['name' => 'La Liga 2','season' => '2023/2024'],
            ['name' => 'Serie B','season' => '2023/2024'],
            ['name' => 'EFL Cup','season' => '2023/2024'],
            ['name' => 'FA Cup','season' => '2023/2024'],
            ['name' => 'Carabao Cup','season' => '2023/2024'],
            ['name' => 'Community Shield','season' => '2023/2024'],
            ['name' => 'UEFA Champions League','season' => '2023/2024'],
            ['name' => 'UEFA Europa League','season' => '2023/2024'],
            ['name' => 'UEFA Europa Conference League','season' => '2023/2024'],
            ['name' => 'FIFA Club World Cup','season' => '2023/2024'],
            ['name' => 'Copa Libertadores','season' => '2023/2024'],
            ['name' => 'Copa Sudamericana','season' => '2023/2024'],
            ['name' => 'AFC Champions League','season' => '2023/2024'],
            ['name' => 'AFC Cup','season' => '2023/2024'],
            ['name' => 'CONCACAF Champions League','season' => '2023/2024'],
            ['name' => 'CONCACAF League','season' => '2023/2024'],
            ['name' => 'CAF Champions League','season' => '2023/2024'],
            ['name' => 'CAF Confederation Cup','season' => '2023/2024'],
            ['name' => 'OFC Champions League','season' => '2023/2024'],
        ];
        foreach ($leagues as $league) {
            League::create([
                'name' => $league['name'],
                'season' => $league['season'],
            ]);
        }
    }
}
