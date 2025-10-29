<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Guardian;
use App\Models\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat classrooms terlebih dahulu
        Classroom::factory(4)->create();

        // Buat guardians
        Guardian::factory(10)->create();

        // Buat students dengan classroom_id dan guardian_id
        Student::factory(10)->create([
            'classroom_id' => function () {
                return Classroom::inRandomOrder()->first()->id;
            },
            'guardian_id' => function () {
                return Guardian::inRandomOrder()->first()->id;
            }
        ]);

        // Create subjects
        \App\Models\Subject::factory(8)->create();

        // Create teachers
        \App\Models\Teacher::factory(5)->create();
    }
}
