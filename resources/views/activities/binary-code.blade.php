@extends('activities.layout')

@section('main')
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 text-center">
            @if(Session::has('info'))
                <div class="container alert alert-info">
                    {{ Session::get('info') }}
                </div>
            @endif
            @if(Session::has('fail'))
                <div class="container alert alert-success">
                    {{ Session::get('fail') }}
                </div>
            @endif
            @if(Session::has('success'))
                <div class="container alert alert-warning">
                    {{ Session::get('success') }}
                </div>
            @endif
            <h1 class="text-white mb-4 animated slideInDown">{{ $title }} Activity</h1>
            <p class="text-white pb-3 animated slideInDown"><span class="h2 text-white">لكي تحصل علي النشاط قم بتسجيل إسمك والبريد الإلكتروني وسوف نرسل النشاط علي بريدك الإلكتروني</span>
            </p>
            <p><span class="h3 text-light"> إستمتعوا بالنشاط وشاركونا في التعليقات بنشاطكم</span></p>
            <a href="#contact-form" class="btn btn-lg btn-warning">اشترك الان</a>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded animated zoomIn" src="{{ asset('activities/img/binary-code-main.jpeg') }}"
                 alt="">
        </div>
    </div>
@endsection

@section('testimonial')
    <div class="testimonial-item bg-light rounded my-4">
        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>حقيقي مهندسة هدير ربنا
            يبارك لحضرتك صبورة على الولاد وبتحتوي قدراتهم وبتبسطي المعلومات جدًا لحد ما يستوعبوا ويفهموا
            وفعلًا طريقة شرحك رائعة وبسيطة وكلها طولة بال اللهم بارك 💕</p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle"
                 src="{{ asset('activities/img/main-logo.png') }}"
                 style="width: 65px; height: 65px;">
            <div class="ps-4">
                <h5 class="mb-1">يامن</h5>
                <span>Mental Math Course</span>
            </div>
        </div>
    </div>
    <div class="testimonial-item bg-light rounded my-4">
        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>جزاك الله خيرا ميس
            هدير على تعبك وصبرك مع الاولاد وكمان على المادة العلمية حتى اللهم بارك وقت البريك بيكون ألعاب
            مفيدة و محمد بيكون مبسوط معاكى .. بالتوفيق دائما يارب ونتقابل فى المسابقة باذن الله 💪</p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle"
                 src="{{ asset('activities/img/main-logo.png') }}"
                 style="width: 65px; height: 65px;">
            <div class="ps-4">
                <h5 class="mb-1">محمد</h5>
                <span>FLL Competition Course</span>
            </div>
        </div>
    </div>
    <div class="testimonial-item bg-light rounded my-4">
        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>شكرا جداااااا
            باشمهندسة هدير على تعبك مع الولاد في الكورس محمد راجع مبسوط ومتحمس انه اتعلم حاجات ميعرفهاش يا
            رب بالنفع والفائدة ان شاء الله ........</p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle"
                 src="{{ asset('activities/img/main-logo.png') }}"
                 style="width: 65px; height: 65px;">
            <div class="ps-4">
                <h5 class="mb-1"> محمد</h5>
                <span>CodyBot Robot Course</span>
            </div>
        </div>
    </div>
@endsection
