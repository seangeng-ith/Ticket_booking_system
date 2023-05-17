<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $events = [
            ['name' => 'Women football U-22 ', 'date' => '2023-05-12', 'stadium_id' => 1, 'sport_id'=>1],
            ['name' => 'Men football U-22 ', 'date' => '2023-05-12', 'stadium_id' => 2, 'sport_id'=>2],
            ['name' => 'Women Volleyball U-22 ', 'date' => '2023-05-12', 'stadium_id' => 3, 'sport_id'=>4],
            ['name' => 'Women Tennis U-22 ', 'date' => '2023-05-12', 'stadium_id' => 4, 'sport_id'=>5],
            ['name' => 'Women Basketball U-22 ', 'date' => '2023-05-12', 'stadium_id' => 6, 'sport_id'=>2],
            ['name' => 'Men Swimming U-22 ', 'date' => '2023-05-12', 'stadium_id' => 5,'sport_id'=>1 ],

        ];
        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
