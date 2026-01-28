<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = ['10', '11', '12'];
        $majors = ['PPLG', 'Animasi', 'DKV'];
        
        foreach ($grades as $grade) { // loop pengurutan kelas
            foreach ($majors as $major) {
                for ($i = 1; $i <= 4; $i++) {
                    \App\Models\Classroom::create([
                        'name' => "{$grade} {$major} {$i}"
                    ]);
                }
            }
        }
    }
}
