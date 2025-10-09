<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $subjectName = fake()->unique()->randomElement(['Web Dev', 'Game Dev', 'Mobile Dev', 'PKK', 'Mathematika']);


        $description = match ($subjectName) {
            'Web Dev' => 'pelajaran web dev',
            'Game Dev' => 'gemdev',
            'Mobile Dev' => 'fluter',
            'PKK' => 'basis data',
            'bahasa jepang' => 'ohayo',
            'bahasa inggris' => 'good morning',
            'bahasa jerman' => 'guten tag',
            'Mathematika' => 'tata letak koordinat',
        };

        return [
            'name' => $subjectName,
            'description' => $description,
        ];
    }
}