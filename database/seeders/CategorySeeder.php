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
                'title' => 'FIRST ® LEGO® League Discover equips children with the skills to tackle STEM learning with confidence',
                'age_from' => 4,
                'age_to' => 6,
                'short_description' => 'Overview Of First lego League<br>Core Values<br>Robot Design - Mechanical',
                'description' => '<p>FIRST ® LEGO® League Discover is the youngest of three divisions of FIRST LEGO League, created to inspire youth to experiment and grow their critical thinking, coding, and design skills through fun handson STEM learning and robotics.</p><p>All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p><ul class="column-gallery gallery-column-2"><li><img src="https://innovation-hub.app/assets/images/s3/uploads/3.jpg" alt="Gallery Images"></li><li><img src="https://innovation-hub.app/assets/images/s3/uploads/5.jpg" alt="Gallery Images"></li></ul><h4>What have teams been doing?</h4><p>Teams of children ages 4-6 have been given meaningful problems to solve linked to a relevant real-world theme. They have designed and built solutions, learning how to work together to develop their ideas. Using LEGO Education STEAM Park sets, they have iterated on their DUPLO® constructions and shared their achievements with others.</p><h4>WHAT’S HAPPENING?</h4><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Building: Teams will work together to build a (team) model that showcases all they have learned about the real-world problem they investigated.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Special Challenge: Different teams will be matched with each other to solve a special challenge to design and build a new part that will join their models together.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Reviewing: As children are working, the reviewers will talk with them about what and how they are building. The teams will explain their designs and the work in their Engineering Notebooks.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Celebration: The event will end in an award ceremony where each child is celebrated for their amazing achievements. Confidence is boosted as the children receive recognition for their hard work</li></ul>',
                'thumbnail'=> 'assets/images/s3/categories/fll-discover-thumb.png',
                'image'=> 'assets/images/s3/categories/fll-discover.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'competition_id' => 1,
                'name' => 'Explore',
                'title' => 'Explore',
                'age_from' => 6,
                'age_to' => 10,
                'short_description' => 'Overview Of First lego League<br>Core Values<br>Robot Design (Mechanical-Programming)<br>Poster',
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
                'title' => 'Challenge',
                'age_from' => 10,
                'age_to' => 15,
                'short_description' => 'Overview Of First lego League<br>Core Values<br>Robot Design (Mechanical-Programming)<br>Poster',
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
                'title' => 'Kid Coder',
                'age_from' => 5,
                'age_to' => 12,
                'short_description' => 'concepts of programming<br>loops - conditions - events<br>sprits - functions - variables<br>software => Code.org, PictoBlox',
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
                'title' => 'Web Challenge',
                'age_from' => 10,
                'age_to' => 14,
                'short_description' => 'HTML - CSS Concepts<br>HTML Tages, CSS Properties<br>Responsive Design<br>Drawing with HTML, CSS Grid Layout',
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
                'title' => 'Python Challenge',
                'age_from' => 10,
                'age_to' => 14,
                'short_description' => 'Python Data Type (int-float-string,...)<br>Basic Built-In Data Structures (list-tuple,...)<br>Control statement (if-elif-else-match)<br>Loops (for-while)<br>Variables - Comments<br>Built-In Functions (len-sort-reverse-list-str)',
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
