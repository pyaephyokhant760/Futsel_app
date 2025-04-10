<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coaches = [
            ['first_name' => 'Pyae Phyo', 'last_name' => 'Khant','birth_date' => '1990-01-01', 'country' => 'Myanmar', 'history' => 'Former player, now coach', 'start_date' => '2020-01-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'John', 'last_name' => 'Doe','birth_date' => '1985-05-15', 'country' => 'USA', 'history' => 'Experienced coach with a successful track record', 'start_date' => '2018-06-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'Jane', 'last_name' => 'Smith','birth_date' => '1992-03-10', 'country' => 'Canada', 'history' => 'Former international player turned coach', 'start_date' => '2019-08-15', 'end_date' => '2023-01-01'],
            ['first_name' => 'Carlos', 'last_name' => 'Gomez','birth_date' => '1980-11-20', 'country' => 'Spain', 'history' => 'Tactical expert with a focus on youth development', 'start_date' => '2021-02-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'Fatima', 'last_name' => 'Ali','birth_date' => '1988-07-30', 'country' => 'Egypt', 'history' => 'Former national team player, now coaching at the club level', 'start_date' => '2022-03-15', 'end_date' => '2023-01-01'],
            ['first_name' => 'Liam', 'last_name' => 'O\'Connor','birth_date' => '1995-12-25', 'country' => 'Ireland', 'history' => 'Young coach with a passion for developing talent', 'start_date' => '2023-01-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'Emma', 'last_name' => 'Johnson','birth_date' => '1994-02-14', 'country' => 'England', 'history' => 'Former player with a focus on women\'s football', 'start_date' => '2021-09-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'Mohammed', 'last_name' => 'Ali','birth_date' => '1982-06-18', 'country' => 'Saudi Arabia', 'history' => 'Experienced coach with a focus on youth development', 'start_date' => '2019-11-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'Aisha', 'last_name' => 'Khan','birth_date' => '1991-09-05', 'country' => 'Pakistan', 'history' => 'Former player with a focus on women\'s football development', 'start_date' => '2020-11-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'David', 'last_name' => 'Brown','birth_date' => '1983-04-18', 'country' => 'Australia', 'history' => 'Experienced coach with a background in sports science', 'start_date' => '2017-07-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'Maria', 'last_name' => 'Garcia','birth_date' => '1987-10-12', 'country' => 'Mexico', 'history' => 'Former player with a focus on youth coaching', 'start_date' => '2019-05-20', 'end_date' => '2023-01-01'],
            ['first_name' => 'Sofia', 'last_name' => 'Martinez','birth_date' => '1990-06-30', 'country' => 'Argentina', 'history' => 'Former player with a focus on tactical coaching', 'start_date' => '2022-04-01', 'end_date' => '2023-01-01'],
            ['first_name' => 'Rajesh', 'last_name' => 'Patel','birth_date' => '1986-08-22', 'country' => 'India', 'history' => 'Experienced coach with a background in sports management', 'start_date' => '2018-10-15', 'end_date' => '2023-01-01'],
            ['first_name' => 'Chloe', 'last_name' => 'Johnson','birth_date' => '1993-03-28', 'country' => 'England', 	'history'=> 	'Aspiring coach with a focus on youth development','start_date'=> 	'2020-12-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Liam', 'last_name' => 'Smith','birth_date' => '1994-01-15', 'country' => 'USA', 	'history'=> 	'Former player with a focus on tactical coaching','start_date'=> 	'2021-05-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Ava', 'last_name' => 'Brown','birth_date' => '1992-11-10', 'country' => 'Canada', 	'history'=> 	'Experienced coach with a background in sports science','start_date'=> 	'2019-08-15', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Noah', 'last_name' => 'Davis','birth_date' => '1989-07-20', 'country' => 'Australia', 	'history'=> 	'Aspiring coach with a focus on youth development','start_date'=> 	'2020-03-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Mia', 'last_name' => 'Garcia','birth_date' => '1995-04-25', 'country' => 'Mexico', 	'history'=> 	'Former player with a focus on tactical coaching','start_date'=> 	'2018-09-10', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Ethan', 'last_name' => 'Martinez','birth_date' => '1991-12-05', 'country' => 'Argentina', 	'history'=> 	'Experienced coach with a background in sports management','start_date'=> 	'2017-11-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Isabella', 'last_name' => 'Hernandez','birth_date' => '1990-02-18', 'country' => 'Spain', 	'history'=> 	'Aspiring coach with a focus on youth development','start_date'=> 	'2021-06-15', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Lucas', 'last_name' => 'Lopez','birth_date' => '1988-09-30', 'country' => 'Brazil', 	'history'=> 	'Former player with a focus on tactical coaching','start_date'=> 	'2019-04-20', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Sophia', 'last_name' => 'Wilson','birth_date' => '1994-03-12', 'country' => 'USA', 	'history'=> 	'Experienced coach with a background in sports science','start_date'=> 	'2018-07-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Jackson', 'last_name' => 'Anderson','birth_date' => '1993-08-28', 'country' => 'Canada', 	'history'=> 	'Aspiring coach with a focus on youth development','start_date'=> 	'2020-01-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Ava', 'last_name' => 'Thompson','birth_date' => '1992-05-14', 'country' => 'Australia', 	'history'=> 	'Former player with a focus on tactical coaching','start_date'=> 	'2019-10-15', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Mason', 'last_name' => 'Taylor','birth_date' => '1987-11-22', 'country' => 'USA', 	'history'=> 	'Experienced coach with a successful track record','start_date'=> 	'2018-06-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Olivia', 'last_name' => 'Martinez','birth_date' => '1991-03-10', 'country' => 'Canada', 	'history'=> 	'Former international player turned coach','start_date'=> 	'2019-08-15', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Liam', 'last_name' => 'Garcia','birth_date' => '1985-07-20', 'country' => 'Spain', 	'history'=> 	'Tactical expert with a focus on youth development','start_date'=> 	'2021-02-01', 	'end_date'=>'2023-01-01'],
            ['first_name' => 'Emma', 'last_name' => 'Hernandez','birth_date' => '1988-12-30', 'country' => 'Egypt', 	'history'=> 	'Former national team player, now coaching at the club level','start_date'=> 	'2022-03-15', 	'end_date'=>'2023-01-01'],
           
        ];
        foreach ($coaches as $coach) {
            \App\Models\Coach::create([
                'name' => $coach['first_name'],
                'birth_date' => $coach['birth_date'],
                'country' => $coach['country'],
                'history' => $coach['history'],
                'start_date' => $coach['start_date'],
                'end_date' => $coach['end_date'],
            ]);
        }
    }
}
