<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EduVibe - Education HTML Template Using Bootstrap 5</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/eduvibe-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnifypopup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jqueru-ui-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
<div class="main-wrapper">
    <header class="edu-header  header-sticky header-transparent header-style-2 header-default">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="Site Logo">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-xl-block">
                    <nav class="mainmenu-nav d-none d-lg-block">
                        <ul class="mainmenu">
                            <li><a href="#intro">Intro</a>
                            <li><a href="#demo">Demos</a>
                            <li><a href="#features">Features</a>
                            <li><a href="#faq">FAQ</a>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-8 col-xl-3 col-md-6 col-6">
                    <div class="header-right d-flex justify-content-end">
                        <div class="header-menu-bar">
                            <div class="quote-icon quote-user d-none d-md-block ml--15 ml_sm--5">
                                <a class="edu-btn btn-medium header-purchase-btn" href="https://1.envato.market/VyeWkO" target="_blank">Purchase Now</a>
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
                    <a href="index.html">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Site Logo">
                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
            </div>
            <ul class="mainmenu">
                <li><a href="#intro">Intro</a>
                <li><a href="#demo">Demos</a>
                <li><a href="#features">Features</a>
                <li><a href="#faq">FAQ</a>
            </ul>
        </div>
    </div>

    {{ $slot }}

    <footer class="pv-footer edu-section-gap">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <h3 class="title color-white mb--50">Build Best Educational Sites <br> with EduVibe HTML Template </h3>
                        <div class="button-group">
                            <a class="edu-btn purchase-btn" href="https://1.envato.market/VyeWkO" target="_blank">Get EduVibe <i class="icon-arrow-right-line-right"></i>
                            </a>
                            <a class="edu-btn bg-white right-button" href="#demo">Explore Demo <i class="icon-arrow-right-line-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-shop d-xl-block d-none">
                <div class="inner">
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/banner/banner-01/workshop.png') }}" alt="Workshop Images">
                    </div>
                    <div class="content">
                        <h6 class="title">Design Workshop</h6>
                        <span class="time">Today at 6:00 am</span>
                        <div>
                            <a class="edu-btn btn-secondary btn-small" href="#">Join Now <i class="icon-arrow-right-line-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-trophy d-lg-block d-none">
                <div class="trophy-content">
                    <div class="icon">
                        <img src="{{ asset('assets/images/testimonial-section/trophy.png') }}" alt="Trophy Images">
                    </div>
                    <div class="content">
                        <h6 class="text">50K+</h6>
                        <span>Satisfied Learners</span>
                    </div>
                </div>
            </div>

            <div class="student-like-status d-xl-block d-none">
                <div class="inner">
                    <div class="icon">
                        <i class="icon-Smile"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">900K</h6>
                        <span class="subtitle">Total Students</span>
                    </div>
                </div>
            </div>

            <div class="card-info d-xl-block d-none">
                <div class="inner bounce-slide">
                    <div class="name">Shophia D. <span>/ Professior</span>
                    </div>
                    <div class="rating-wrapper d-flex">
                        <div class="rating eduvibe-course-rating-stars">
                            <i class="icon-Star"></i>
                            <i class="icon-Star"></i>
                            <i class="icon-Star"></i>
                            <i class="icon-Star"></i>
                            <i class="icon-Star"></i>
                        </div>
                        <span>(2567)</span>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape shape-1">
                    <img src="{{ asset('assets/images/landing-demo/footer-shop.jpg') }}" alt="Shop Single">
                </div>
                <div class="shape shape-2">
                    <img src="{{ asset('assets/images/landing-demo/footer-student.jpg') }}" alt="Student">
                </div>
            </div>
        </div>
    </footer>

</div>
<div class="rn-progress-parent">
    <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/backtotop.js') }}"></script>
<script src="{{ asset('assets/js/vendor/magnifypopup.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slick.js') }}"></script>
<script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-appear.js') }}"></script>
<script src="{{ asset('assets/js/vendor/odometer.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotop.js') }}"></script>
<script src="{{ asset('assets/js/vendor/imageloaded.js') }}"></script>
<script src="{{ asset('assets/js/vendor/lightbox.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.js') }}"></script>
<script src="{{ asset('assets/js/vendor/paralax.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/paralax-scroll.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/vendor/tilt.jquery.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
