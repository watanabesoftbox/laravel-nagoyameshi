<?php

namespace Database\Factories;

use App\Models\RegularHoliday;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<RegularHoliday>
 */
class RegularHolidayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day' => fake()->dayOfWeek(),
        ];
    }
}
