<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $players = [
        //     ['name' => 'Pyae Phyo Khant','birth' => '1998-01-01','position' => 'Forward','team_id' => 1],
        //     ['name' => 'Aung Aung','birth' => '1998-01-01','position' => 'Midfielder','team_id' => 1],
        //     ['name' => 'Ko Ko','birth' => '1998-01-01','position' => 'Defender','team_id' => 1],
        //     ['name' => 'Htet Htet','birth' => '1998-01-01','position' => 'Goalkeeper','team_id' => 1],
        //     ['name' => 'Moe Moe','birth' => '1998-01-01','position' => 'Forward','team_id' => 1],
        //     ['name' => 'Aung Aung Kyaw','birth' => '1998-01-01','position' => 'Midfielder','team_id' => 1],
        //     ['name' => 'Zaw Zaw','birth' => '1998-01-01','position' => 'Defender','team_id' => 1],
        //     ['name' => 'Hla Hla Aye','birth' => '1998-01-01','position' => 'Goalkeeper','team_id' => 1],
        //     ['name' => 'Nanda Kyaw','birth' => '1998-01-01','position' => 'Forward','team_id' => 1],
        //     ['name' => 'Ko Ko Naing','birth' => '1998-01-01','position' => 'Defender','team_id' => 1],
        //     ['name' => 'Htet Htet Aung','birth' => '1998-01-01','position' => 'Goalkeeper','team_id' => 1],
        //     ['name' => 'Moe Moe Aye','birth' => '1998-01-01','position' => 'Forward','team_id' => 1],
        //     ['name' => 'Aung Kaung Mann','birth' => '1999-02-02','position' => 'Midfielder','team_id' => 1],
        //     ['name' => 'Zaw Min Htut','birth' => '2000-03-03','position' => 'Defender','team_id' => 1],
        //     ['name' => 'Kyaw Kyaw Naing','birth' => '2001-04-04','position' => 'Goalkeeper','team_id' => 1],
        //     ['name' => 'Nanda Kyaw','birth' => '2002-05-05','position' => 'Forward','team_id' => 1],
        //     ['name' => 'Ko Ko Naing','birth' => '1998-01-01','position' => 'Defender','team_id' => 1],
        //     ['name' => 'Htet Htet Aung','birth' => '1998-01-01','position' => 'Goalkeeper','team_id' => 1],
        //     ['name' => 'Moe Moe Aye','birth' => '1998-01-01','position' => 'Forward','team_id' => 1],
        //     ['name' => 'Aung Kaung Mann','birth' => '1999-02-02','position' => 'Midfielder','team_id' => 1],
        //     ['name' => 'Zaw Min Htut','birth' => '2000-03-03','position' => 'Defender','team_id' => 1],
        //     ['name' => 'Kyaw Kyaw Naing','birth' => '2001-04-04','position' => 'Goalkeeper','team_id' => 1],
        //     ['name' => 'Nanda Kyaw','birth' => '2002-05-05','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Ko Ko','birth' => '1998-01-01','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Htet Htet','birth' => '1998-01-01','position' => 'Goalkeeper','team_id'=>1],
        //     ['name' => 'Moe Moe','birth' => '1998-01-01','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Aung Kaung Mann','birth' => '1999-02-02','position' => 'Midfielder','team_id'=>1],
        //     ['name' => 'Zaw Min Htut','birth' => '2000-03-03','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Kyaw Kyaw Naing','birth' => '2001-04-04','position' => 'Goalkeeper','team_id'=>1],
        //     ['name' => 'Nanda Kyaw','birth' => '2002-05-05','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Htet Htet Aung','birth' => '2004-07-07','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Moe Moe Aye','birth' => '2005-08-08','position' => 'Goalkeeper','team_id'=>1],
        //     ['name' => 'Nay Lin Aung','birth' => '2006-09-09','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Thura Thura','birth' => '2007-10-10','position' => 'Midfielder','team_id'=>1],
        //     ['name' => 'Aye Chan','birth' => '2008-11-11','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Zaw Zaw','birth' => '2009-12-12','position' => 'Goalkeeper','team_id'=>1],
        //     ['name' => 'Hla Hla Aye','birth' => '2010-01-13','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Nanda Aye','birth' => '2011-02-14','position' => 'Midfielder','team_id'=>1],
        //     ['name' => 'Ko Ko Gyi','birth' => '2012-03-15','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Htet Htet Kyaw','birth' => '2013-04-16','position' => 'Goalkeeper','team_id'=>1],
        //     ['name' => 'Moe Moe','birth' => '2014-05-17','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Nay Nay','birth' => '2015-06-18','position' => 'Midfielder','team_id'=>1],
        //     ['name' => 'Thura Thura Aung','birth' => '2016-07-19','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Aye Aye','birth' => '2017-08-20','position' => 'Goalkeeper','team_id'=>1],
        //     ['name' => 'Zaw Zaw Aye','birth' => '2018-09-21','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Hla Hla','birth' => '2019-10-22','position' => 'Midfielder','team_id'=>1],
        //     ['name' => 'Nanda Kyaw Aye','birth' => '2020-11-23','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Ko Ko Naing Aye','birth' => '2021-12-24','position' => 'Goalkeeper','team_id'=>1],
        //     ['name' => 'Htet Htet Aung Aye','birth' => '2022-01-25','position' => 'Forward','team_id'=>1],
        //     ['name' => 'Moe Moe Aye Aye','birth' => '2023-02-26','position' => 'Midfielder','team_id'=>1],
        //     ['name' => 'Nay Lin Aung Aye','birth' => '2024-03-27','position' => 'Defender','team_id'=>1],
        //     ['name' => 'Thura Thura Aye','birth' => '2025-04-28','position' => 'Goalkeeper','team_id'=>1],

            
        // ];
        // foreach ($players as $player) {
        //     \App\Models\Player::create([
        //         'name' => $player['name'],
        //         'birth' => $player['birth'],
        //         'position' => $player['position'],
        //         'team_id' => $player['team_id'],
        //     ]);
        // }
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('players')->insert([
                'name'      => $faker->name,
                'birth'     => $faker->date(), // e.g. 1995-06-21
                'position'  => $faker->randomElement(['Forward', 'Midfielder', 'Defender', 'Goalkeeper']),
                'team_id'   => $faker->numberBetween(1, 50), // assumes team_id 1-50 exists
                'created_at'=> now(),
                'updated_at'=> now(),
            ]);
        }
    }
}
