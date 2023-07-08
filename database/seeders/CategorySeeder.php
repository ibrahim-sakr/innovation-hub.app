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
                'start_date' => '29 Jul, 2023',
                'start_time' => '02:00 PM, 06:30 PM',
                'location' => 'Nasr City, Makraam Ebaid'
            ],
            [
                'id' => 2,
                'competition_id' => 1,
                'name' => 'Explore',
                'title' => 'FIRST ® LEGO ® League Explore makes learning STEM and coding skills fun!',
                'age_from' => 6,
                'age_to' => 10,
                'short_description' => 'Overview Of First lego League<br>Core Values<br>Robot Design (Mechanical-Programming)<br>Poster',
                'description' => '<p>FIRST ® LEGO® League Explore is the middle of three divisions of FIRST LEGO League, created to inspire youth to experiment and grow their critical thinking, coding, and design skills through fun hands-on STEM learning and robotics.</p><p>All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p><ul class="column-gallery gallery-column-2"><li><img src="https://innovation-hub.app/assets/images/s3/uploads/1.jpg" alt="Gallery Images"></li><li><img src="https://innovation-hub.app/assets/images/s3/uploads/6.jpg" alt="Gallery Images"></li></ul><h4>What have teams been doing?</h4><p>Teams of children ages 6-10 have investigated a challenge related to a real-world theme, designing and building their solution as a group. Using LEGO Education SPIKE™ Essential or WeDo 2.0 they have learned to code their team model to move and be interactive using sensors.</p><h4>WHAT’S HAPPENING?</h4><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Team Model and Team Poster: Teams will showcase their work to everyone present by explaining all they have learned about the real-world problem they have investigated.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Special Activities: Children will take part in different STEMrelated activities and have the chance to work with each other to solve new problems.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Reviewing: The reviewers will visit each team to listen and ask questions about the models they have built and coded. The children will explain how their code makes their models move and talk about what they have learned about working as a team.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Celebration: The event will end in an award ceremony where each child is celebrated for their amazing achievements. Confidence is boosted as the children receive recognition for their hard work.</li></ul>',
                'thumbnail'=> 'assets/images/s3/categories/fll-explore-thumb.png',
                'image'=> 'assets/images/s3/categories/fll-explore.png',
                'created_at' => $now,
                'updated_at' => $now,
                'start_date' => '29 Jul, 2023',
                'start_time' => '04:00 PM, 04:30 PM',
                'location' => 'Nasr City, Makraam Ebaid'            ],
            [
                'id' => 3,
                'competition_id' => 1,
                'name' => 'Challenge',
                'title' => 'FIRST ® LEGO® League Challenge makes STEM inspiring and fun',
                'age_from' => 10,
                'age_to' => 15,
                'short_description' => 'Overview Of First lego League<br>Core Values<br>Robot Design (Mechanical-Programming)<br>Poster',
                'description' => '<p>FIRST ® LEGO® League Challenge is the oldest of three divisions of FIRST LEGO League, created to inspire youth to experiment and grow their critical thinking, coding, and design skills through fun hands-on STEM learning and robotics</p><p>All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p><ul class="column-gallery gallery-column-2"><li><img src="https://innovation-hub.app/assets/images/s3/uploads/2.jpg" alt="Gallery Images"></li><li><img src="https://innovation-hub.app/assets/images/s3/uploads/4.jpg" alt="Gallery Images"></li></ul><h4>What have teams been doing?</h4><p>For roughly 12 weeks, teams of students ages 9-16* have engaged in research, problem-solving, coding, and engineering – building and programming a LEGO® Education SPIKE™ Prime or LEGO MINDSTORMS® robot and conducting a research project to identify and solve a relevant real-world problem related to the annual theme. FIRST ® LEGO® League Challenge is the oldest of three divisions of FIRST LEGO League, created to inspire youth to experiment and grow their critical thinking, coding, and design skills through fun hands-on STEM learning and robotics. Once a child progresses through the FIRST LEGO League divisions (Discover, Explore and Challenge), they are encouraged to “move up” to FIRST ® Tech Challenge (grades 7-12/ages 12-18) and/or FIRST® Robotics Competition (grades 9-12/ages 14-18). All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p><h4>WHAT’S HAPPENING?</h4><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Judging: Teams will share what they have learned and get valuable feedback on their Robot Design, Core Values, and Innovation Project in a half-hour judging session. Judges will assess teams’ work on rubrics and provide some immediate verbal feedback to encourage and inspire them.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Robot Game: In addition to judging, each team will play three separate 2.5-minute matches of the Robot Game. They will try to have their robot score as many points as possible by solving the missions of the Robot Game. Only their highest score counts. The Robot Game allows teams to demonstrate how well their design and code worked. In between matches, you may see them working together to iterate and improve their robot for their next round. Referees at the Robot Game table will also be watching how the teams embody Gracious Professionalism® – the spirit of friendly competition unique to all FIRST programs. When all the matches and judging sessions are complete, the top-performing teams will take home awards, but all teams will share in the celebration of a season well done.</li></ul>',
                'thumbnail'=> 'assets/images/s3/categories/fll-challenge-thumb.png',
                'image'=> 'assets/images/s3/categories/fll-challenge.png',
                'created_at' => $now,
                'updated_at' => $now,
                'start_date' => '29 Jul, 2023',
                'start_time' => '11:00 AM',
                'location' => 'Nasr City, Makraam Ebaid'
            ],
            [
                'id' => 4,
                'competition_id' => 2,
                'name' => 'Kid Coder',
                'title' => 'Kid Coder',
                'age_from' => 5,
                'age_to' => 12,
                'short_description' => 'concepts of programming<br>loops - conditions - events<br>sprits - functions - variables<br>software => Code.org, PictoBlox',
                'description' => '<p>In Code challenge, there are three main rounds in each category with different challenges. Each participant/team should finish the challenge and submit their work in specified time.</p><p>All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p><ul class="column-gallery gallery-column-2"><li><img src="https://innovation-hub.app/assets/images/s3/uploads/8.jpg" alt="Gallery Images"></li><li><img src="https://innovation-hub.app/assets/images/s3/uploads/9.jpg" alt="Gallery Images"></li></ul><h4>Rules</h4><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Please read through the main general rules before proceeding on with these rules.</li><li><i class="icon-checkbox-circle-fill-solid"></i> The allowed age is between 5 and 12 years.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Software allowed in this category is Scratch 3 or PictoBlox.</li></ul><h4>Required knowledge to participate</h4><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Loops</li><li><i class="icon-checkbox-circle-fill-solid"></i> Events</li><li><i class="icon-checkbox-circle-fill-solid"></i> Functions</li><li><i class="icon-checkbox-circle-fill-solid"></i> Conditions</li><li><i class="icon-checkbox-circle-fill-solid"></i> Sprites</li><li><i class="icon-checkbox-circle-fill-solid"></i> Variables</li></ul>',
                'thumbnail'=> 'assets/images/s3/categories/rc-kid-coder-thumb.png',
                'image'=> 'assets/images/s3/categories/rc-kid-coder.png',
                'created_at' => $now,
                'updated_at' => $now,
                'start_date' => '27 Jul, 2023',
                'start_time' => '06:30 PM',
                'location' => 'Nasr City, Makraam Ebaid'
            ],
            [
                'id' => 5,
                'competition_id' => 2,
                'name' => 'Web Challenge',
                'title' => 'Web Challenge',
                'age_from' => 10,
                'age_to' => 14,
                'short_description' => 'HTML - CSS Concepts<br>HTML Tages, CSS Properties<br>Responsive Design<br>Drawing with HTML, CSS Grid Layout',
                'description' => '<p>In Code challenge, there are three main rounds in each category with different challenges. Each participant/team should finish the challenge and submit their work in specified time.</p><p>All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p><ul class="column-gallery gallery-column-2"><li><img src="https://innovation-hub.app/assets/images/s3/uploads/10.jpg" alt="Gallery Images"></li><li><img src="https://innovation-hub.app/assets/images/s3/uploads/11.jpg" alt="Gallery Images"></li></ul><h4>Rules</h4><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Please read through the main general rules before proceeding on with these rules.</li><li><i class="icon-checkbox-circle-fill-solid"></i> The allowed age starting from 10 years is divided into two main categories ( Junior (10- 14 years old ) and Mid-level (15 years old and above).)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Teams should use pure HTML and CSS without using any CSS frameworks.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Teams are not allowed to use JavaScript or any framework or library.</li><li><i class="icon-checkbox-circle-fill-solid"></i> Challenges may be a drawing, animation, or a normal website design.</li></ul><h4>Required knowledge to participate</h4><p>Good knowledge about HTML and CSS concepts as the following:</p><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Main HTML tags and CSS properties</li><li><i class="icon-checkbox-circle-fill-solid"></i> Semantic HTML</li><li><i class="icon-checkbox-circle-fill-solid"></i> Positioning</li><li><i class="icon-checkbox-circle-fill-solid"></i> Flex boxes</li><li><i class="icon-checkbox-circle-fill-solid"></i> Responsive design</li><li><i class="icon-checkbox-circle-fill-solid"></i> Drawing using HTML a n d CSS</li></ul>',
                'thumbnail'=> 'assets/images/s3/categories/rc-web-challenge-thumb.png',
                'image'=> 'assets/images/s3/categories/rc-web-challenge.png',
                'created_at' => $now,
                'updated_at' => $now,
                'start_date' => '25 Jul, 2023',
                'start_time' => '04:30 PM',
                'location' => 'Nasr City, Makraam Ebaid'
            ],
            [
                'id' => 6,
                'competition_id' => 2,
                'name' => 'Python Challenge',
                'title' => 'Python Challenge',
                'age_from' => 10,
                'age_to' => 14,
                'short_description' => 'Python Data Type (int-float-string,...)<br>Basic Built-In Data Structures (list-tuple,...)<br>Control statement (if-elif-else-match)<br>Loops (for-while)<br>Variables - Comments<br>Built-In Functions (len-sort-reverse-list-str)',
                'description' => '<p>In Code challenge, there are three main rounds in each category with different challenges. Each participant/team should finish the challenge and submit their work in specified time.</p><p>All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p><ul class="column-gallery gallery-column-2"><li><img src="https://innovation-hub.app/assets/images/s3/uploads/7.jpg" alt="Gallery Images"></li><li><img src="https://innovation-hub.app/assets/images/s3/uploads/12.jpg" alt="Gallery Images"></li></ul><h4>Rules</h4><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Please read through the main general rules before proceeding on with these rules.</li><li><i class="icon-checkbox-circle-fill-solid"></i> The allowed age starting from 10 years old is divided into two main categories ( Junior (10- 14 years old) and Mid-level (15 years old and above).)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Teams should use pure Python and its built-in modules only if they need to use them. (eg. random, statistics, time, math, turtle, etc...)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Using Python libraries or frameworks are not allowed. (eg. NumPy, Pandas, Flask, etc...)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Challenges will be like building a simple calculator, drawing shapes, generating passwords, summary statistics calculations, checking certain conditions, and branching.</li></ul><h4>Required knowledge to participate</h4><p>Good knowledge about the following concepts:</p><ul class="list-style-1 mb--20"><li><i class="icon-checkbox-circle-fill-solid"></i> Python data types (eg. int, float, string, etc...)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Basic built-in data structures (eg. list, tuple, etc...)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Control statements (if, elif, else, match statements)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Loops (for, while loops)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Slicing and indexing</li><li><i class="icon-checkbox-circle-fill-solid"></i> Writing comments</li><li><i class="icon-checkbox-circle-fill-solid"></i> Variables</li><li><i class="icon-checkbox-circle-fill-solid"></i> Basic built-in functions (len, sort, reverse, list, str, range, etc...)</li><li><i class="icon-checkbox-circle-fill-solid"></i> Basic mathematical expressions and operations</li><li><i class="icon-checkbox-circle-fill-solid"></i> User-defined functions (Basic knowledge)</li></ul>',
                'thumbnail'=> 'assets/images/s3/categories/rc-python-challenge-thumb.png',
                'image'=> 'assets/images/s3/categories/rc-python-challenge.png',
                'created_at' => $now,
                'updated_at' => $now,
                'start_date' => '29 Jul, 2023',
                'start_time' => '06:30 PM',
                'location' => 'Nasr City, Makraam Ebaid'            ],
        ];

        Category::truncate();
        Category::insert($categories);
    }
}
