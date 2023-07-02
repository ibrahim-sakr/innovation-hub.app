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
                'name' => 'First Lego League',
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
        ];

        Competition::truncate();
        Competition::insert($competitions);
    }
}
