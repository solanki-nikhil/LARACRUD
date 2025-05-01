<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'contact'=>fake()->phoneNumber(),
            'enroll'=>fake()->unique()->numerify('ENR#####'),
            'age'=>fake()->randomDigitNot(0),
            'city'=>fake()->randomDigitNot(0)    
        ];
    }
}
