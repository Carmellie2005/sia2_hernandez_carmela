<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'course_code' => 'BSIT',
                'course_name' => 'Bachelor of Science in Information Technology',
                'units' => 158,
                'department' => 'College of Computer Studies',
            ],
            [
                'course_code' => 'BSCS',
                'course_name' => 'Bachelor of Science in Computer Science',
                'units' => 155,
                'department' => 'College of Computer Studies',
            ],
            [
                'course_code' => 'BSIS',
                'course_name' => 'Bachelor of Science in Information Systems',
                'units' => 156,
                'department' => 'College of Computer Studies',
            ],
            [
                'course_code' => 'ACT',
                'course_name' => 'Associate in Computer Technology',
                'units' => 88,
                'department' => 'College of Computer Studies',
            ],
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(
                ['course_code' => $course['course_code']],
                $course
            );
        }
    }
}
