<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subject;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         static $subjectIndex = 0;
        
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->numerify('08#########'),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'subject_id' => function() use (&$subjectIndex) {
                $subjects = Subject::all();
                if ($subjects->isEmpty()) {
                    return Subject::factory()->create()->id;
                }
                return $subjects[$subjectIndex++ % $subjects->count()]->id;
            }
        ];
    }
    }

