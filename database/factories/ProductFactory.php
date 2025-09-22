<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sku' => fake()->unique()->randomNumber(6, true),
            'name' => ucfirst(fake()->words(3, true)),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(0, 1000, 100000),
            'discount_percent' => ($value = fake()->numberBetween(0, 20)) === 0 ? null : $value,
            'quantity' => fake()->numberBetween(0, 1000),
            'status' => true,
        ];
    }
}
