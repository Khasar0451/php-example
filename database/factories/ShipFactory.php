<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dock;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ship>
 */
class ShipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->streetName(),
            'type' => "Escort",
            'dock_id' => Dock::factory(),
            
        ];
    }
}
