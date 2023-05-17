<?php

namespace Database\Factories;

use App\Models\Sport;
use App\Models\Stadium;
use App\Models\TeamMatch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            'name' => $this->faker->name(),
            'date' => $this->faker->unique()->date(),
            'stadium_id' => $this->faker->numberBetween(1, Stadium::count()),
            'sport_id' => $this->faker->numberBetween(1, Sport::count()),
        ];
    }
}
