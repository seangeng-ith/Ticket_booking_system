<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Zones = [
            ['name' => 'Zone A', 'stadium_id' => 1, 'number_tickets' => 300],
            ['name' => 'Zone B', 'stadium_id' => 2, 'number_tickets' => 300],
            ['name' => 'Zone D', 'stadium_id' => 3, 'number_tickets' => 300],
            ['name' => 'Zone C', 'stadium_id' => 4, 'number_tickets' => 300],
            ['name' => 'Zone B', 'stadium_id' => 5, 'number_tickets' => 300],
            ['name' => 'Zone C', 'stadium_id' => 6, 'number_tickets' => 300],
            ['name' => 'Zone D', 'stadium_id' => 7, 'number_tickets' => 300],

        ];
        foreach( $Zones as $Zone){
            Zone::create($Zone);
        }
    }
}
