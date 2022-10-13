<?php

namespace Database\Factories;

use App\Models\UserTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAccounts>
 */
class UserAccountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type_id' => UserTypes::factory(),
            'name' => fake()->name(),
            'age' => fake()->numberBetween(18, 70),
            'gender' => fake()->randomElement(['male', 'female']),
            'address' => fake()->address(),
            'contact_number' => fake()->randomDigit(),
            'username' => fake()->userName(),
            'password' => fake()->password()
        ];
    }
}
