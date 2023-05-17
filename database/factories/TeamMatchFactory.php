<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Matches;
use App\Models\Schedule;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMatch>
 */
class TeamMatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'team_id' => $this->faker->numberBetween(1, Team::count()),
            'match_id' => $this->faker->numberBetween(1, Matches::count()),
            'schedule_id' => $this->faker->numberBetween(1, Schedule::count()),
            'event_id' => $this->faker->numberBetween(1, Event::count()),

        ];
    }
}
