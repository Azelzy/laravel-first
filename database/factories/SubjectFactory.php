<?php

namespace Database\Factories;

use App\Models\Subject;
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
    $subjects = [
        ['name' => 'Matematika', 'description' => 'Algoritma dan kawankawan'],
        ['name' => 'Bahasa Jepang', 'description' => 'ohayo'],
        ['name' => 'Bahasa Inggris', 'description' => 'Bahasa inggris'],
        ['name' => 'Mobile dev', 'description' => 'flutter dan java'],
        ['name' => 'Web dev', 'description' => 'laravel dan react'],
    ];
    
    static $index = 0;
    $subject = $subjects[$index % count($subjects)];
    $index++;
    
    return $subject;
}
}

