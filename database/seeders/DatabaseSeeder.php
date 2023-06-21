<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CoursesSeeder::class);
        $this->call(CompetitionsSeeder::class);
        $this->call(ActivitiesSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
