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
        // Buat 4 classroom terlebih dahulu
        Classroom::factory(4)->create();

        // Buat 10 student dengan classroom_id random dari classroom yang sudah dibuat
        Student::factory(10)->create([
            'classroom_id' => function () {
                return Classroom::inRandomOrder()->first()->id;
            }
        ]);

        // Buat guardian untuk setiap student
        Guardian::factory(10)->create();

        // Create subjects first
        \App\Models\Subject::factory(8)->create();
        

        // Create teachers and associate with subjects
        \App\Models\Teacher::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        }
    }
