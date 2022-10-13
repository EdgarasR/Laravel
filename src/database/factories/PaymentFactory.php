<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\UserAccounts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => Products::factory(),
            'quantity' => fake()->randomNumber(2, false),
            'amount' => fake()->randomDigit(),
            'date' => fake()->date(),
            'user_id' => UserAccounts::factory()
        ];
    }
}
