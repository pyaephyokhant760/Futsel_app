<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $players = [
            ['name' => 'Pyae Phyo Khant','birth' => '1998-01-01','position' => 'Forward'],
            ['name' => 'Aung Kaung Mann','birth' => '1999-02-02','position' => 'Midfielder'],
            ['name' => 'Zaw Min Htut','birth' => '2000-03-03','position' => 'Defender'],
            ['name' => 'Kyaw Kyaw Naing','birth' => '2001-04-04','position' => 'Goalkeeper'],
            ['name' => 'Nanda Kyaw','birth' => '2002-05-05','position' => 'Forward'],
            ['name' => 'Ko Ko Naing','birth' => '2003-06-06','position' => 'Midfielder'],
            ['name' => 'Htet Htet Aung','birth' => '2004-07-07','position' => 'Defender'],
            ['name' => 'Moe Moe Aye','birth' => '2005-08-08','position' => 'Goalkeeper'],
            ['name' => 'Nay Lin Aung','birth' => '2006-09-09','position' => 'Forward'],
            ['name' => 'Thura Thura','birth' => '2007-10-10','position' => 'Midfielder'],
            ['name' => 'Aye Chan','birth' => '2008-11-11','position' => 'Defender'],
            ['name' => 'Zaw Zaw','birth' => '2009-12-12','position' => 'Goalkeeper'],
            ['name' => 'Hla Hla Aye','birth' => '2010-01-13','position' => 'Forward'],
            ['name' => 'Nanda Aye','birth' => '2011-02-14','position' => 'Midfielder'],
            ['name' => 'Ko Ko Gyi','birth' => '2012-03-15','position' => 'Defender'],
            ['name' => 'Htet Htet Kyaw','birth' => '2013-04-16','position' => 'Goalkeeper'],
            ['name' => 'Moe Moe','birth' => '2014-05-17','position' => 'Forward'],
            ['name' => 'Nay Nay','birth' => '2015-06-18','position' => 'Midfielder'],
            ['name' => 'Thura Thura Aung','birth' => '2016-07-19','position' => 'Defender'],
            ['name' => 'Aye Aye','birth' => '2017-08-20','position' => 'Goalkeeper'],
            ['name' => 'Zaw Zaw Aye','birth' => '2018-09-21','position' => 'Forward'],
            ['name' => 'Hla Hla','birth' => '2019-10-22','position' => 'Midfielder'],
            ['name' => 'Nanda Kyaw Aye','birth' => '2020-11-23','position' => 'Defender'],
            ['name' => 'Ko Ko Naing Aye','birth' => '2021-12-24','position' => 'Goalkeeper'],
            ['name' => 'Htet Htet Aung Aye','birth' => '2022-01-25','position' => 'Forward'],
            ['name' => 'Moe Moe Aye Aye','birth' => '2023-02-26','position' => 'Midfielder'],
            ['name' => 'Nay Lin Aung Aye','birth' => '2024-03-27','position' => 'Defender'],
            ['name' => 'Thura Thura Aye','birth' => '2025-04-28','position' => 'Goalkeeper'],

            
        ];
        foreach ($players as $player) {
            \App\Models\Player::create([
                'name' => $player['name'],
                'birth' => $player['birth'],
                'position' => $player['position'],
            ]);
        }
    }
}
