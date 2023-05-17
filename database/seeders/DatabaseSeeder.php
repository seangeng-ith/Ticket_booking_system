<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Matches;
use App\Models\Schedule;
use App\Models\Sport;
use App\Models\Stadium;
use App\Models\Team;
use App\Models\TeamMatch;
use App\Models\Ticket;
use App\Models\Zone;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(SportSeeder::class);
        Schedule::factory(10)->create();
        $this->call(TeamSeeder::class);
        Matches::factory(10)->create();
        $this->call(StadiumSeeder::class);
        $this->call(ZoneSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(TeamMatchSeeder::class);
        TeamMatch::factory(10)->create();
    }
}
