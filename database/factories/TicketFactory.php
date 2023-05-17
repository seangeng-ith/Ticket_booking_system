<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
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
            'event_id' => $this->faker->unique()->numberBetween(1, Event::count()),
            'zone_id' => $this->faker->numberBetween(1, Zone::count()),
            
        ];
    }
}
