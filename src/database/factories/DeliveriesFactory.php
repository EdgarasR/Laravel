<?php

namespace Database\Factories;

use App\Models\UserAccounts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deliveries>
 */
class DeliveriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => UserAccounts::factory(),
            'date' => fake()->date()
        ];
    }
}
