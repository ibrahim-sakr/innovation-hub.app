<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $testimonials = [
            [
                'id' => 1,
                'name' => 'مها فوزي',
                'stars' => 5,
                'content' => 'سلام عليكم ورحمة الله وبركاته
مهندسة هدير🌺🌺
اولا جزاك الله خيرا علي كل حاجه حلوة عملتيها مع الولاد أنا سعيدة جداااا بعرفة حضرتك وسعيده أكتر بأداء حضرتك مع الولاد من أول المسابقة اللي كان ليها معاد واضح بنتظرها انا ومحمد علشان يحلها لتشجيع حضرتك اللطيف علي الحل اللي كان بيشجعه يستني المرة اللي بعدها 🥰🥰🥰 وبعد كده الهديه الروعه ديه😍😍
وحبه اقول لحضرتك إني بصراحه محستش للحظه أن الكورس ده مش مدفوع من أول ألتزام حضرتك بالمعاد لمتابعة الولاد وتشجيعهم فعلا جزاك الله خيرا 😘😘😘
واتمني نحضر مع حضرتك كورسات تاني🌹🌹🌹',
                'label' => 'coding'
            ],
            [
                'id' => 2,
                'name' => 'اّمنه الفقيه',
                'stars' => 5,
                'content' => 'كانت تجربة جميلة مع استاذه هدير
متعاونة معنا بالمواعيد المناسبة لنا
تمتلك المهارة الممتازة بالتعامل مع الاطفال و تسهيل ايصال المعلومة للطفل
لدروس مشوقة وممتعة معها وغير مملة
عندها حلول وطرق عديدة دائما.',
                'label' => 'mental math'
            ],
        ];

        Testimonial::truncate();
        Testimonial::insert($testimonials);
    }
}


