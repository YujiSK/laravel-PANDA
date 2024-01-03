<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Constants\UserConstants;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;
    protected static int $sequence = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'email' => fake()->unique()->regexify('[a-z]' . self::$sequence++ . "@example\.com"),
            'password' => static::$password ??= Hash::make('password'),
            'birthday' => fake()->dateTimeBetween($startDate = '-30 years', $endDate = '-20 years'),
            'gender' => fake()->numberBetween(0, User::getGenderListSize() - 1),
            'phone_num' => fake()->numerify('040########'),
            'situation' => fake()->randomElement([0, 1]),
            'role' => fake()->numberBetween(0, User::getGenderListSize() - 1),

            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
