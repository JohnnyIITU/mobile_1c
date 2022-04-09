<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subjects\User>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return array(
            'name' => $this->faker->name(),
            'bin' => $this->faker->unique()->iban(prefix: 'T', length: 12),
            'license_count' => $this->faker->numberBetween(0, 100),
            'license_valid_till' => $this->faker->creditCardExpirationDate()
        );
    }
}
