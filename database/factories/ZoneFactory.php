<?php

namespace Database\Factories;

use App\Models\Stadium;
use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zone>
 */
class ZoneFactory extends Factory
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
            'name' => $this->faker->unique()->sentence($nbSentences = 3, $variableNbSentences = true),
            'stadium_id' => $this->faker->numberBetween(1, Stadium::count()),
            'number_tickets' => $this->faker->numberBetween(100,500)
        ];
    }
}
