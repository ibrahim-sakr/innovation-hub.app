<header class="edu-header header-sticky header-transparent header-style-2 header-default">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="Innovation Hub Logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 d-none d-xl-block">
                <nav class="mainmenu-nav d-none d-lg-block">
                    <ul class="mainmenu">
                        <li><a href="#courses">Courses</a>
                        <li><a href="#competitions">Competitions</a>
                        <li><a href="#activities">Activities</a>
                        <li><a href="#testimonials">Testimonials</a>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-8 col-xl-3 col-md-6 col-6">
                <div class="header-right d-flex justify-content-end">
                    <div class="header-menu-bar">
                        <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">
                            <button class="edu-btn btn-medium header-purchase-btn search-trigger">
                                Free Session
                            </button>
                        </div>
                    </div>
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
    </div>
</header>

<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Innovation Hub Logo">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="#courses">Courses</a>
            <li><a href="#competitions">Competitions</a>
            <li><a href="#activities">Activities</a>
            <li><a href="#testimonials">Testimonials</a>
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
        <div class="search-form">
            <div class="container checkout-page-style">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="login-form-box">
                            <h3 class="mb-30">Free Session</h3>
                            <form class="login-form" action="#">
                                <div class="input-box mb--30">
                                    <input type="text" placeholder="Full Name"/>
                                </div>
                                <div class="input-box mb--30">
                                    <input type="email" placeholder="Email"/>
                                </div>
                                <div class="input-box mb--30">
                                    <input type="password" placeholder="Password"/>
                                </div>
                                <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                    <span>Register</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Search Popup  -->
