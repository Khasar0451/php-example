<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dock>
 */
class DockFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['A1', 'B7', 'C4']),
        ];
    }
}
