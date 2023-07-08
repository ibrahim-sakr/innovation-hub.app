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
                'description' => 'Sequencing activity involves putting a set of instructions or events in a specific order to achieve a particular outcome or goal.',
                'icon' => 'Destination',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'name' => 'Binary code',
                'description' => 'Binary code activity is the use of 1s and 0s to represent data and instructions in computing, which is essential for all computer operations and applications.',
                'icon' => 'Browser',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'name' => 'Multiplication table',
                'description' => 'Multiplication activity involves finding the product of two or more numbers by adding a number to itself a certain number of times, which is a fundamental arithmetic operation used in many mathematical and computational tasks.',
                'icon' => 'Lock',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'name' => 'Programing Resources',
                'description' => 'Free resources of programming include online tutorials, open-source software, forums, and communities that provide educational materials and support for learning to code.',
                'icon' => 'Lock',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Activity::truncate();
        Activity::insert($activities);
    }
}
