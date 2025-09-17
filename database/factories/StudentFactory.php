<?php

namespace Database\Factories;

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
            'birth_date' => $this->faker->date('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->city(),
            'grade' => $this->faker->randomElement([
                '11 PPLG 1',
                '11 PPLG 2',
                '11 PPLG 3',
                '11 PPLG 4',
                '11 PPLG 5',
                '11 PPLG 6',
                '11 PPLG 7',
                '11 PPLG 8',
                '11 PPLG 9',
                '11 PPLG 10',
            ]),
        ];
    }
}
