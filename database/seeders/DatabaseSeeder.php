<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\GoalSeeder;
use Database\Seeders\MarkSeeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\TeamSeeder;
use Database\Seeders\CoachSeeder;
use Database\Seeders\MatchSeeder;
use Database\Seeders\LeagueSeeder;
use Database\Seeders\PlayerSeeder;
use Database\Seeders\PermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(PermissionSeeder::class);
        $this->call(LeagueSeeder::class);
        $this->call(CoachSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(MatchSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(GoalSeeder::class);
        $this->call(MarkSeeder::class);
        $this->call(NewsSeeder::class);
    }
}
