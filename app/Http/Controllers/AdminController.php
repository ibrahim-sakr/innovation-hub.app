<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard', [
            'report' => $this->getReport()
        ]);
    }


    private function getReport(): array
    {
        $sql = <<<SQL
            select any_value(email) as user_email,
                   any_value(phone) as user_phone,
                   GROUP_CONCAT(IF(questions.slug = 'q1', answers.answer, NULL)) as 'ما اسم بطل رحلتنا',
                   group_concat(IF(questions.slug = 'q2', answers.answer, NULL)) as 'كم عمر بطل رحلتنا',
                   group_concat(IF(questions.slug = 'q3', answers.answer, NULL)) as 'ما أكثر شيء تتمنين تطويره لدى طفلك من خلال تعلم البرمجة',
                   group_concat(IF(questions.slug = 'q4', answers.answer, NULL)) as 'يشعر بطل رحلتنا بالملل سريعًا من الشرح التقليدي',
                   group_concat(IF(questions.slug = 'q5', answers.answer, NULL)) as 'يفضل الحركة أو التفاعل أثناء التعلم',
                   group_concat(IF(questions.slug = 'q6', answers.answer, NULL)) as 'يتحمس أكثر عندما يكون التعلم على شكل لعبة أو تحدي',
                   group_concat(IF(questions.slug = 'q7', answers.answer, NULL)) as 'ينتقل بسرعة من نشاط إلى آخر',
                   group_concat(IF(questions.slug = 'q8', answers.answer, NULL)) as 'يتفاعل بشكل أفضل مع الأنشطة العملية والتجارب',
                   group_concat(IF(questions.slug = 'q9', answers.answer, NULL)) as 'يحب المنافسة والتحديات السريعة',
                   group_concat(IF(questions.slug = 'q10', answers.answer, NULL)) as 'يتعلم بشكل أسرع عند مشاهدة الصور أو الفيديوهات',
                   group_concat(IF(questions.slug = 'q11', answers.answer, NULL)) as 'يفضل تجربة الأشياء بنفسه بدل الاستماع للشرح فقط',
                   group_concat(IF(questions.slug = 'q12', answers.answer, NULL)) as 'يتذكر ما يراه أكثر مما يسمعه',
                   group_concat(IF(questions.slug = 'q13', answers.answer, NULL)) as 'يحب بناء أو تركيب الأشياء',
                   group_concat(IF(questions.slug = 'q14', answers.answer, NULL)) as 'يستمتع باكتشاف حلول جديدة للمشكلات',
                   group_concat(IF(questions.slug = 'q15', answers.answer, NULL)) as 'يطرح الكثير من الأسئلة بدافع الفضول',
                   group_concat(IF(questions.slug = 'q16', answers.answer, NULL)) as 'يستمتع بالتعلم أو العمل مع الآخرين',
                   group_concat(IF(questions.slug = 'q17', answers.answer, NULL)) as 'يفضل أحيانًا العمل بمفرده',
                   group_concat(IF(questions.slug = 'q18', answers.answer, NULL)) as 'يتحفز أكثر عند التشجيع والمدح',
                   group_concat(IF(questions.slug = 'q19', answers.answer, NULL)) as 'يشعر بالحماس عند وجود تحديات أو منافسة',
                   group_concat(IF(questions.slug = 'q20', answers.answer, NULL)) as 'يتردد أو يتوتر في المجموعات الكبيرة',
                   group_concat(IF(questions.slug = 'q21', answers.answer, NULL)) as 'يظهر تفاعلًا أفضل عندما يشعر بالراحة والحرية',
                   group_concat(IF(questions.slug = 'q22', answers.answer, NULL)) as 'ينجذب إلى الألعاب أو الأنشطة التي تحتوي على تحديات وحلول',
                   group_concat(IF(questions.slug = 'q23', answers.answer, NULL)) as 'يهتم بالتكنولوجيا أو الأجهزة أو الروبوتات',
                   group_concat(IF(questions.slug = 'q24', answers.answer, NULL)) as 'يستمتع بالأفكار الإبداعية والتصميم والابتكار',
                   group_concat(IF(questions.slug = 'q25', answers.answer, NULL)) as 'يسأل كثيرًا عن كيفية عمل الأشياء من حوله.',
                   group_concat(IF(questions.slug = 'q26', answers.answer, NULL)) as 'يفضل الأنشطة التفاعلية أكثر من التعلم التقليدي',
                   group_concat(IF(questions.slug = 'q27', answers.answer, NULL)) as 'يستمتع بالتجربة والاستكشاف أكثر من الحفظ والتلقين',
                   group_concat(IF(questions.slug = 'q28', answers.answer, NULL)) as 'يحتاج إلى متابعة مستمرة للحفاظ على تركيزه',
                   group_concat(IF(questions.slug = 'q29', answers.answer, NULL)) as 'يتعلم بشكل أفضل عند الحصول على اهتمام مباشر',
                   group_concat(IF(questions.slug = 'q30', answers.answer, NULL)) as 'يتحفز أكثر عند التعلم مع مجموعة صغيرة',
                   group_concat(IF(questions.slug = 'q31', answers.answer, NULL)) as 'يحتاج وقتًا إضافيًا لفهم التعليمات الجديدة',
                   group_concat(IF(questions.slug = 'q32', answers.answer, NULL)) as 'يُظهر أداءً أفضل عندما يكون التعلم ممتعًا وغير تقليدي',
                   group_concat(IF(questions.slug = 'q33', answers.answer, NULL)) as 'يتفاعل أكثر عندما يشعر بالحرية في التجربة والاستكشاف',
                   group_concat(IF(questions.slug = 'q34', answers.answer, NULL)) as 'ما أكثر شيء يميز بطل رحلتنا؟',
                   group_concat(IF(questions.slug = 'q35', answers.answer, NULL)) as 'كيف تصفين بطل رحلتنا؟ شاركونا أكثر الصفات التي تميز شخصيته، وطريقته في التعلم أو التفاعل'
            from respondents
                left join answers on respondents.id = answers.respondent_id
                left join questions on answers.question_slug = questions.slug
            group by user_email;
        SQL;

        return DB::select($sql);
    }
}
