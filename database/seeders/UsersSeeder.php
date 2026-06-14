<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();
        $users = [
            [
                'id' => 1,
                'name' => 'Hadeer Asker',
                'email' => 'hadeer@asker.com',
                'password' => bcrypt('HadeerAsker'),
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];

        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();
        User::insert($users);
    }
}
