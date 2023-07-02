<header class="edu-header disable-transparent  header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo-light" src="{{ asset('assets/images/s3/static/logo.png') }}" alt="Innovation Hub Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-xl-block">
                <nav class="mainmenu-nav d-none d-lg-block">
                    <ul class="mainmenu">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                    </ul>
                </nav>
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
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
        </ul>
    </div>
</div>
