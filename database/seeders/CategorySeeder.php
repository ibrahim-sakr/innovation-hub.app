<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $categories = [
            [
                'id' => 1,
                'competition_id' => 1,
                'name' => 'Discover',
                'age_from' => 4,
                'age_to' => 6,
                'description' => 'Overview Of First lego League<br>Core Values<br>Robot Design - Mechanical',
                'thumbnail'=> 'assets/images/s3/categories/fll-discover-thumb.png',
                'image'=> 'assets/images/s3/categories/fll-discover.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'competition_id' => 1,
                'name' => 'Explore',
                'age_from' => 6,
                'age_to' => 10,
                'description' => 'Overview Of First lego League<br>Core Values<br>Robot Design (Mechanical-Programming)<br>Poster',
                'thumbnail'=> 'assets/images/s3/categories/fll-explore-thumb.png',
                'image'=> 'assets/images/s3/categories/fll-explore.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'competition_id' => 1,
                'name' => 'Challenge',
                'age_from' => 10,
                'age_to' => 15,
                'description' => 'Overview Of First lego League<br>Core Values<br>Robot Design (Mechanical-Programming)<br>Poster',
                'thumbnail'=> 'assets/images/s3/categories/fll-challenge-thumb.png',
                'image'=> 'assets/images/s3/categories/fll-challenge.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'competition_id' => 2,
                'name' => 'Kid Coder',
                'age_from' => 5,
                'age_to' => 12,
                'description' => 'concepts of programming<br>loops - conditions - events<br>sprits - functions - variables<br>software => Code.org, PictoBlox',
                'thumbnail'=> 'assets/images/s3/categories/rc-kid-coder-thumb.png',
                'image'=> 'assets/images/s3/categories/rc-kid-coder.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'competition_id' => 2,
                'name' => 'Web Challenge',
                'age_from' => 10,
                'age_to' => 14,
                'description' => 'HTML - CSS Concepts<br>HTML Tages, CSS Properties<br>Responsive Design<br>Drawing with HTML, CSS Grid Layout',
                'thumbnail'=> 'assets/images/s3/categories/rc-web-challenge-thumb.png',
                'image'=> 'assets/images/s3/categories/rc-web-challenge.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'competition_id' => 2,
                'name' => 'Python Challenge',
                'age_from' => 10,
                'age_to' => 14,
                'description' => 'Python Data Type (int-float-string,...)<br>Basic Built-In Data Structures (list-tuple,...)<br>Control statement (if-elif-else-match)<br>Loops (for-while)<br>Variables - Comments<br>Built-In Functions (len-sort-reverse-list-str)',
                'thumbnail'=> 'assets/images/s3/categories/rc-python-challenge-thumb.png',
                'image'=> 'assets/images/s3/categories/rc-python-challenge.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        Category::truncate();
        Category::insert($categories);
    }
}
