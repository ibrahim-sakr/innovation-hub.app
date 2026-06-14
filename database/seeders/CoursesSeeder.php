<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $courses = [
            [
                'id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
                'name' => 'Coding',
                'level' => 'Coding',
                'students_count' => 16,
                'duration' => 1920,
                'price' => 250,
                'feature' => 1,
                'lessons_count' => 16,
                'description' => 'Students will learn the concepts of programming through practical projects using CodyBot robot and by the end of the course students will have mastered basic programming and robotics skills',
                'age_from' => 8,
                'age_to' => null,
                'thumbnail' => 'assets/images/s3/courses/coding-thumb.png',
                'image' => 'assets/images/s3/courses/coding.png',
            ],
            [
                'id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
                'name' => 'Robotics',
                'level' => 'Robotics',
                'students_count' => 21,
                'duration' => 960,
                'price' => 370,
                'feature' => 1,
                'lessons_count' => 16,
                'description' => 'Students will learn  engineering design skills at each step of the design process , Develop efficient problem-solving and coding skills , Design projects that combine hardware and software components to collect and exchange data and Apply critical thinking and develop life skills for the careers of tomorrow.',
                'age_from' => 6,
                'age_to' => 10,
                'thumbnail' => 'assets/images/s3/courses/robotics-thumb.png',
                'image' => 'assets/images/s3/courses/robotics.png',
            ],
            [
                'id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
                'name' => 'Mental Math',
                'level' => 'Mental Math',
                'students_count' => 58,
                'duration' => 1920,
                'price' => 250,
                'feature' => 1,
                'lessons_count' => 16,
                'description' => 'Mental math can help kids understand math concepts better and get to the answer faster. Improve the Skills of Students of All Ages',
                'age_from' => 5,
                'age_to' => null,
                'thumbnail' => 'assets/images/s3/courses/mental-math-thumb.png',
                'image' => 'assets/images/s3/courses/mental-math.png',
            ],
        ];

        Course::truncate();
        Course::insert($courses);
    }
}
