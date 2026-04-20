<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'student_no' => '2024-0001',
                'first_name' => 'Carmela',
                'last_name' => 'Hernandez',
                'email' => 'carmela.hernandez@example.com',
                'course' => 'BS Information Technology',
                'year_level' => 3,
            ],
            [
                'student_no' => '2024-0002',
                'first_name' => 'Alden',
                'last_name' => 'Reyes',
                'email' => 'alden.reyes@example.com',
                'course' => 'BS Information Technology',
                'year_level' => 2,
            ],
            [
                'student_no' => '2024-0003',
                'first_name' => 'Leah',
                'last_name' => 'Santos',
                'email' => 'leah.santos@example.com',
                'course' => 'BS Computer Science',
                'year_level' => 1,
            ],
            [
                'student_no' => '2024-0004',
                'first_name' => 'Marco',
                'last_name' => 'Garcia',
                'email' => 'marco.garcia@example.com',
                'course' => 'BS Information Systems',
                'year_level' => 4,
            ],
        ];

        foreach ($students as $student) {
            Student::updateOrCreate(
                ['student_no' => $student['student_no']],
                $student
            );
        }
    }
}
