<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $activities = [
            [
                'id' => 1,
                'name' => 'Sequencing & debugging',
                'description' => 'Description',
                'icon' => 'Destination',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'name' => 'Binary code',
                'description' => 'Description',
                'icon' => 'Browser',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'name' => 'Multiplication table',
                'description' => 'Description',
                'icon' => 'Lock',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Activity::truncate();
        Activity::insert($activities);
    }
}
