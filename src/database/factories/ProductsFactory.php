<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\UserAccounts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Categories::factory(),
            'name' => fake()->randomElement(['prod1', 'prod2', 'prod3', 'prod4', 'prod5']),
            'price' => fake()->randomFloat(2, 10, 500),
            'count' => fake()->randomNumber(2, false),
            'description' => fake()->sentence(),
            'user_id' => UserAccounts::factory()
        ];
    }
}
