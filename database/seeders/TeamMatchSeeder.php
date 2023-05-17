<?php

namespace Database\Seeders;

use App\Models\TeamMatch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teamMatches = [
            ['team_id' => 2, 'match_id'=>2 ,'schedule_id' => 1, 'event_id' =>1],
            ['team_id' => 9, 'match_id'=>1 ,'schedule_id' => 2,'event_id' =>2],
            ['team_id' => 8, 'match_id'=>3 ,'schedule_id' => 3,'event_id' =>3],
            ['team_id' => 7, 'match_id'=>4 ,'schedule_id' => 4,'event_id' =>4],
            ['team_id' => 6, 'match_id'=>5 ,'schedule_id' => 5,'event_id' =>5],
            ['team_id' => 5, 'match_id'=>3 ,'schedule_id' => 6,'event_id' =>3],
            ['team_id' => 4, 'match_id'=>5 ,'schedule_id' => 3,'event_id' =>4],
            ['team_id' => 3, 'match_id'=>2 ,'schedule_id' => 4,'event_id' =>1],
            ['team_id' => 2, 'match_id'=>2 ,'schedule_id' => 2,'event_id' =>3],
            [ 'team_id' => 1, 'match_id'=>3 ,'schedule_id' => 1,'event_id' =>1],

        ];
        foreach ($teamMatches as $teamMatch) {
            TeamMatch::create($teamMatch);
        }
    }
}
