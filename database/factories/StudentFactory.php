<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
            'name' => $this->faker->name(),
            'birth_date' => $this->faker->date('Y-m-d', '-10 years'),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->randomElement(['L', 'P']),
            'address' => $this->faker->address(),
            'classroom_id' => Classroom::factory(),
            'guardian_id' => Guardian::factory(),
        ];
    }
}