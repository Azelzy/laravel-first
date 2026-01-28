<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Guardian;
use App\Models\Classroom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User dengan password yang di-hash
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'), //hash berfungsi untuk mengamankan password menjadi string acak yang panjang saat mengirim ke database
            'email_verified_at' => now(),
        ]);

        // Create Regular User untuk testing
        User::create([
            'name' => 'User Test',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'email_verified_at' => now(),
        ]);

        // Jalankan ClassroomSeeder untuk membuat 36 classrooms
        $this->call(ClassroomSeeder::class);

        // Buat guardians (36 classrooms × 35 students average = 1260 students, buat guardians yang cukup)
        Guardian::factory(1300)->create();

        // Buat students per classroom dengan jumlah 30-40 per kelas
        $classrooms = Classroom::all();
        
        foreach ($classrooms as $classroom) {
            $studentCount = rand(30, 40);
            Student::factory($studentCount)->create([
                'classroom_id' => $classroom->id,
                'guardian_id' => function () {
                    return Guardian::inRandomOrder()->first()->id;
                }
            ]);
        }

        // Create subjects
        \App\Models\Subject::factory(8)->create();

        // Create teachers
        \App\Models\Teacher::factory(5)->create();
    }
}