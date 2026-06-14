<?php

namespace Database\Seeders;

use App\Models\Competition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $competitions = [
            [
                'id' => 1,
                'name' => 'First Lego League Egypt',
                'slug' => 'fll egypt',
                'description' => 'FIRST LEGO League guides youth through STEM learning and exploration at an early age. From Discover, to Explore and then to Challenge, students will understand the basics of STEM and apply their skills in an exciting competition while gaining productive learning habits, confidence, and teamwork skills along the way.',
                'thumbnail' => 'assets/images/s3/competitions/fll-thumb.png',
                'image' => 'assets/images/s3/competitions/fll.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'name' => 'Code Challenge Egypt',
                'slug' => 'RC Egypt',
                'description' => 'In Code challenge, there are three main categories and three main rounds in each category with different challenges. Each participant/team should finish the challenge and submit their work in specified time',
                'thumbnail' => 'assets/images/s3/competitions/rc-thumb.png',
                'image' => 'assets/images/s3/competitions/rc.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'name' => 'Open Robotic Competition Egypt',
                'slug' => 'orce',
                'description' => 'In 2017, both Technofuture Egypt and KidZania started organizing the Open Robotic Competition of Egypt "ORCE" under the auspices of the Arab Robotic Association. Many teams participate in the competition every year in various competition types. Last year, 163 teams participated in the competition at the level of the Arab Republic of Egypt, and nearly 650 contestants. All of them competed through several competitions that showed the extent of awareness and keeping pace with our youth with technological development, as the competitions contribute to the development of modern programming skills, technology, creative thinking, engineering design and the ability to solve problems through a fun competition between teams.',
                'thumbnail' => 'assets/images/s3/competitions/orce-thumb.jpg',
                'image' => 'assets/images/s3/competitions/orce.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Competition::truncate();
        Competition::insert($competitions);
    }
}
