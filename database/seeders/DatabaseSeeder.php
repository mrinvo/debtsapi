<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Article;
use App\Models\Home;
use App\Models\Rule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Admin::create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('adminadmin'),
        // ]);

        Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
        ]);

        Home::create([
            'video_url' => 'https://www.youtube.com/watch?v=lPOpzOrT9a8',
            'landing_page_url' => 'https://ssddyonk.com/',


        ]);

        Article::create([
            'title' => 'first article',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora a ad rerum natus officiis, enim deserunt hic, praesentium iusto libero aperiam veritatis cupiditate nulla necessitatibus fugit porro, placeat exercitationem rem?',
            'img' => base_path('public/upload/Frame.png'),

        ]);
        Article::create([
            'title' => 'second article',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora a ad rerum natus officiis, enim deserunt hic, praesentium iusto libero aperiam veritatis cupiditate nulla necessitatibus fugit porro, placeat exercitationem rem?',
            'img' => base_path('public/upload/Frame.png'),
        ]);
        Article::create([
            'title' => 'third article',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora a ad rerum natus officiis, enim deserunt hic, praesentium iusto libero aperiam veritatis cupiditate nulla necessitatibus fugit porro, placeat exercitationem rem?',
            'img' => base_path('public/upload/Frame.png'),

        ]);


        Rule::create([
            'key' => 0,
            'rules' => '
            تطبيق " سدد مديونيتك" ومحتوياته ملكية خاصة لإدارة التطبيق
يرجى قراءة هذا القسم بعناية قبل الوصول إلى هذا التطبيق أو استخدامه.

 من خلال الوصول إلى هذا التطبيق أو استخدامه، فإنك توافق على الالتزام بالشروط والأحكام التالية المذكورة فيه.
 إذا كنت لا ترغب في الالتزام بهذه الشروط والأحكام وإخلاء المسؤولية، فلا يجوز لك الوصول إلى هذا التطبيق أو استخدامه. يجوز لنا إجراء أي تنقيحات على هذا القسم في أي وقت، وتكون هذه المراجعات سارية فور نشر القسم المنقح أو عندما تتلقى إشعارًا بالمراجعة.
 أنت توافق على مراجعة هذا القسم من وقت لآخر لأية تعديلات، يعتبر الإدخال المستمر الخاص بك يشكل استخدام هذا التطبيق موافقة صريحة على هذا القسم بصيغته المعدلة.
تُبين القواعد المبينة أدناه الشروط والأحكام التي تُنظم استخدامك لتطبيق "سدد مديونيتك" وخدماته ومحتوياته وميزاته ذات الصلة، بما فيها أي تحديث أو إصدار جديد (ويُشار إليهم مجتمعين بلفظ "الخدمة / الخدمات" حسب التعريف الوارد لها أدناه).
التعاريف
أنت / العميل/ المستخدم تعني مستخدم التطبيق عبر الإنترنت، مع مراعاة جميع التعبيرات التي لها نفس المعنى..
معلومات المستخدم تعني جميع التفاصيل والبيانات والمعلومات المالية والمعلومات الشخصية التي نحصل عليها من خلال استخدامك للتطبيق.
 مصطلح المستخدم / المستخدمين يعني مستخدم التطبيق عبر الإنترنت، يقر المستخدم ويتعهد بأن المعلومات المقدمة فيما يتعلق بمعلومات المستخدم صحيحة وكاملة ودقيقة وحديثة.
تطبيق "سدد مديونيتك" هو تطبيق ذكي متوفر على منصات تحميل البرامج.


شروط استخدام الخدمة:
تتاح الخدمة للمستخدمين الذين لا تقل أعمارهم عن [18] عامًا ويحملون الجنسية السعودية.
باستخدام التطبيق الإلكتروني، فإنك تقر ببلوغك السن القانوني المنصوص عليه لاستخدام التطبيق، كما تتعهد بامتثالك لجميع الاشتراطات القانونية وآثارها بذلك الشأن.
لمساعدتنا على حماية المستخدمين وأمان التسجيل والبيانات يطلب التطبيق بعض البيانات الشخصية، مثل رقم الهوية - رقم الهاتف - البريد الإلكتروني - OTP.
يتوجب عليك تنزيل التطبيق عبر متجر التطبيقات (آبل ستور أو بلاي ستور) والتسجيل للحصول على حساب لدى التطبيق.
يتوجب عليك التسجيل في التطبيق وإضافة جميع التفاصيل وكذلك معلومات المستخدم اللازمة لإكمال عملية التسجيل، بما في ذلك على سبيل المثال لا الحصر - تحميل بطاقة الهوية للتحقق من هويتك.
يتوجب عليك تحميل بياناتك المالية المحدثة والمتحقق منها والمُصدقة من البنك الذي تتعامل معه لتقرير وضعك المالي الحالي.
ستتلقى رسالة نصية / رسالة بريد إلكتروني من جانبنا على رقم هاتفك و / أو حساب بريدك الإلكتروني المرتبط بحسابك الذي يُصرح لك بالدخول إلى حسابك لدينا.
يتم الاشتراك في التطبيق على ثلاثة باقات " اشتراك ربع سنوي - اشتراك نصف سنوي - اشتراك سنوي.".
يتم احتساب عدد من الفائزين كل ثلاثة أشهر.
على الفائزين الالتزام بالاشتراك لحين الانتهاء  من تسديد المديونيات.
يمنع اشتراك الأقارب من الدرجة الأولى.
العملة المستخدمة لجميع المستخدمين هي الريال السعودي ويجب أن يكون المستخدمون من حملة الجنسية السعودية فقط.
يقر العميل الشروط والأحكام الماثلة ويضمن صحة ودقة جميع المعلومات والبيانات التي أدخلها في التطبيق الإلكتروني لأغراض عملية التسجيل.
لا يتحمل التطبيق بأي حال من الأحوال، المسؤولية عن أي بيان كاذب من جانب أي من العملاء، كما لا يكون مسؤولًا عن أي ضرر أو إجحاف أو خسارة ناجمة عن البيانات الكاذبة التي يُدلي بها العملاء.
يتحمل العميل كامل المسؤولية عن الحفاظ على سرية المعلومات السرية التي أفصح عنها هذا الأخير، ويتمثل الالتزام الوحيد للتطبيق في هذا الصدد في الحفاظ على سرية جميع المعلومات المتعلقة بالعميل وإبقائها طي الكتمان.
رسوم الاشتراك
حتى يكون العميل مؤهلًا للاشتراك في التطبيق، يلتزم العميل بسداد مبلغ واحد ريال سعودي يوميًا على نحو منتظم وذلك مقابل اشتراك العميل ومشاركته في سداد الديون.
 يحق للمشتركين الانسحاب من البرنامج واسترجاع مبلغ الاشتراك للفترة المتبقية.
طرق السداد
يعمل التطبيق على توفير جميع وسائل الدفع التقليدية للعميل، بما في ذلك المدفوعات عن طريق كروت الائتمان أو كروت الدفع مقدمًا.
ويتلقى العميل إشعارًا بالسداد عند دفعه .
الحسابات وكلمات المرور
إذا قمت بالتسجيل أو الاشتراك في تطبيق "سدد مديونيتك" ، فيجب الحفاظ على سرية أي رمز تعريف مستخدم أو كلمة مرور وأن يقتصر استخدامها عليك فقط .
لدينا الحق في تعطيل أي رمز تعريف مستخدم أو كلمة مرور سواء اخترتها أنت أو خصصناها في أي وقت إذا كنت قد فشلت في الامتثال لأي من أحكام شروط الاستخدام هذه.

القيود على المسؤولية
جميع الشروط والضمانات والبنود الأخرى التي قد تكون ضمنية بخلاف ذلك بموجب التشريعات أو القانون العام أو قانون الإنصاف.
أية مسؤولية ناتجة عن حدوث قوة قاهرة.
أي التزام بالفعالية أو الدقة.
بخلاف ما هو موضح أدناه، لن نتحمل المسؤولية عن أي ضرر مباشر أو غير مباشر يلحق بك فيما يتعلق بهذه الشروط والأحكام.
 يتضمن ذلك أي ضرر يحدث من خلال استخدامك أو عدم قدرتك على استخدام التطبيق.
 لن نتحمل أيضًا المسؤولية عن أي خسارة أو ضرر آخر من أي نوع قد يحدث، سواء كان ناتجًا عن ضرر بما في ذلك الإهمال أو خرق العقد أو غير ذلك - حتى لو كان متوقعًا.
نحن نبذل قصارى جهدنا للتأكد من إمكانية الوصول إلى موقعنا الإلكتروني على مدار الساعة طوال أيام الأسبوع، باستثناء فترة راحة قصيرة بين الحين والآخر. ومع ذلك، لا يمكننا أن نعد بأنه سيكون متاحًا طوال الوقت. إذا كان موقعنا الإلكتروني غير متاح أو بطيء التحميل بسبب النسخ الاحتياطية لنظام الملفات، أو حركة المرور، أو الترقيات، وما إلى ذلك، فلن نكون مسؤولين عن رد أموالك أو تقديم أي تعويض.

السلوك
لا يجوز استخدام التطبيق الإلكتروني بأي طريقة من شأنها أن تسبب أو يحتمل أن تتسبب في انقطاع أو عرقلة التطبيق الإلكتروني أو إمكانية الوصول إليه أو إتلافه أو إضعافه بأي شكل من الأشكال.
 أنت تدرك أنك المسؤول الوحيد عن جميع الاتصالات الإلكترونية والمحتوى الإلكتروني المرسل من جهاز الكمبيوتر الخاص بنا إليك.
 لا يُسمح لك باستخدام التطبيق عبر الإنترنت إلا لأغراض مشروعة.
 بالإضافة إلى ما سبق، فإنك توافق على ما يلي:
عدم استخدام التطبيق بأي طريقة من شأنها تعطيل أو زيادة العبء أو الإضرار باستخدام أي طرف آخر للتطبيق.
عدم استخدام أي روبوت أو عنكبوت أو أي جهاز آلي آخر من أي نوع والامتناع عن استخدام أي عملية أو وسيلة أخرى للوصول إلى التطبيق لأي غرض، بما في ذلك مراقبة أو نسخ أي من المواد الموجودة في التطبيق.
 عدم استخدام أي عملية يدوية لغرض مراقبة أو نسخ أي من المواد الموجودة على التطبيق أو لأي غرض آخر غير مصرح به دون موافقة خطية مسبقة منا.
القانون الحاكم والاختصاص القضائي
تخضع شروط الاستخدام هذه وتفسر وفقا لقوانين المملكة العربية السعودية إلى أقصى مدى يسمح به القانون، كما ينعقد الاختصاص القضائي الحصري لمحاكم المملكة العربية السعودية وحدها دون غيرها.




.



            '
        ]);
    }
}
