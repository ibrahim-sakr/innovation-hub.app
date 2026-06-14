<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $schedules = [
            [
                'id' => 1,
                'name' => 'Next Saturday from 9AM to 10AM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'name' => 'Next Saturday from 10AM to 11AM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'name' => 'Next Saturday from 11AM to 12PM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'name' => 'Next Saturday from 12PM to 1PM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'name' => 'Next Saturday from 1PM to 2PM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'name' => 'Next Sunday from 9AM to 10AM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'name' => 'Next Sunday from 10AM to 11AM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'name' => 'Next Sunday from 11AM to 12PM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'name' => 'Next Sunday from 12PM to 1PM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'name' => 'Next Sunday from 1PM to 2PM',
                'books' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Schema::disableForeignKeyConstraints();
        Schedule::truncate();
        Schema::enableForeignKeyConstraints();
        Schedule::insert($schedules);
    }
}
