<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Teams = [
            ['name' => 'Cambodia', 'sport_id' => 1],
            ['name' => 'Canada', 'sport_id' => 1],
            ['name' => 'USA', 'sport_id' => 1],
            ['name' => 'UK', 'sport_id' => 1],
            ['name' => 'Thailand', 'sport_id' => 1],
            ['name' => 'Vietnam', 'sport_id' => 1],
            ['name' => 'laos', 'sport_id' => 1],
            ['name' => 'Cambodia', 'sport_id' => 2],
            ['name' => 'Cambodia', 'sport_id' => 3],
            ['name' => 'Thailand', 'sport_id' => 1],
            ['name' => 'Phillippines', 'sport_id' => 1],
            ['name' => 'Myanmar', 'sport_id' => 1],
            ['name' => 'Singapore', 'sport_id' => 1],

        ];

        foreach( $Teams as $Team){
            Team::create($Team);
        }
    }
}
