<?php

namespace Database\Factories;

use App\Models\UserAccounts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'trans_type' => fake()->randomElement(['card', 'cash']),
            'description' => fake()->sentence(),
            'date' => fake()->date(),
            'user_id' => UserAccounts::factory(),
        ];
    }
}
