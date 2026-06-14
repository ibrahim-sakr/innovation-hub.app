<header class="edu-header header-sticky header-transparent header-style-2 header-default">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo-light" src="{{ asset('assets/images/s3/static/logo.png') }}"
                             alt="Innovation Hub Logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 d-none d-xl-block">
                <nav class="mainmenu-nav d-none d-lg-block">
                    <ul class="mainmenu">
                        <li><a href="#courses">Courses</a></li>
                        <li><a href="#competitions">Competitions</a></li>
                        <li><a href="#activities">Activities</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-8 col-xl-3 col-md-6 col-6">
                <div class="header-right d-flex justify-content-end">
{{--                    <div class="header-menu-bar">--}}
{{--                        <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">--}}
{{--                            <button class="edu-btn btn-medium header-purchase-btn search-trigger">--}}
{{--                                Free Session--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="mobile-menu-bar ml--15 ml_sm--5 d-block d-xl-none">
                        <div class="hamberger">
                            <button class="white-box-icon hamberger-button">
                                <i class="ri-menu-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-layouts.parts.flash-message></x-layouts.parts.flash-message>
    </div>
</header>

<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/s3/static/logo.png') }}" alt="Innovation Hub Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="#courses">Courses</a></li>
            <li><a href="#competitions">Competitions</a></li>
            <li><a href="#activities">Activities</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
        </ul>
    </div>
</div>

<!-- Start Search Popup  -->
<div class="edu-search-popup">
    <div class="close-button">
        <button class="close-trigger">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="inner">
        <div class="checkout-page-style login-form-box">
            <h3 class="mb-30">Free Session</h3>
            <form class="login-form" action="{{ route('register.free-session') }}" method="post">
                @csrf
                @method('post')
                <div class="input-box mb--30">
                    <input required type="text" name="parent_name" placeholder="Parent Name"/>
                </div>
                <div class="input-box mb--30">
                    <input required type="email" name="parent_email" placeholder="Parent Email"/>
                </div>
                <div class="input-box mb--30">
                    <input required type="text" name="parent_phone" placeholder="Parent Phone"/>
                </div>
                <div class="input-box mb--30">
                    <input required type="text" name="child_name" placeholder="Child Name"/>
                </div>
                <div class="input-box mb--30">
                    <input required type="number" name="child_age" placeholder="Child Age" min="0" max="20"/>
                </div>
                <div class="input-box mb--30">
                    <select name="schedule" required>
                        <option value="" disabled selected hidden>Choose a Schedule</option>
                        @foreach(App\Models\Schedule::all() as $schedule)
                            <option value="{{ $schedule->id }}">{{ $schedule->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                    <span>Register</span>
                </button>
            </form>
        </div>
    </div>
</div>
<!-- End Search Popup  -->
