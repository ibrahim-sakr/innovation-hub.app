<footer id="footer" class="eduvibe-footer-one edu-footer footer-style-default">
    <div class="footer-top">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-8 col-md-6 col-sm-12 col-12">
                    <div class="edu-footer-widget">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo-light" src="{{ asset('assets/images/s3/static/logo-white.png')  }}" alt="Innovation hub Logo">
                            </a>
                        </div>
                        <p class="description">
                            Unlock your child's limitless potential through our engaging and interactive programs, where they will dive into the exciting realms of robotics, programming, and computational thinking.
                        </p>
                        <ul class="social-share">
                            <li><a href="https://www.facebook.com/InnovationHub.tech"><i class="icon-Fb"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/innovationhub-tech" target="_blank"><i class="icon-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

{{--                <div class="col-lg-4 col-md-6 col-sm-6 col-12">--}}
{{--                    <div class="edu-footer-widget explore-widget">--}}
{{--                        <h5 class="widget-title">Explore</h5>--}}
{{--                        <div class="inner">--}}
{{--                            <ul class="footer-link link-hover">--}}
{{--                                <li><a href="about-us-1.html"><i class="icon-Double-arrow"></i>About Us</a></li>--}}
{{--                                <li><a href="event-list.html"><i class="icon-Double-arrow"></i>Upcoming Events</a></li>--}}
{{--                                <li><a href="blog-standard.html"><i class="icon-Double-arrow"></i>Blog & News</a></li>--}}
{{--                                <li><a href="faq.html"><i class="icon-Double-arrow"></i>FAQ Question</a></li>--}}
{{--                                <li><a href="testimonial.html"><i class="icon-Double-arrow"></i>Testimonial</a></li>--}}
{{--                                <li><a href="privacy-policy.html"><i class="icon-Double-arrow"></i>Privacy Policy</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="edu-footer-widget">
                        <h5 class="widget-title">Contact Info</h5>
                        <div class="inner">
                            <div class="widget-information">
                                <ul class="information-list">
                                    <li><i class="icon-map-pin-line"></i>Nasr City, Makraam Ebaid</li>
                                    <li><i class="icon-phone-fill"></i><a href="tel: +201124338883">+2 01124338883</a></li>
                                    <li><i class="icon-mail-line-2"></i><a target="_blank" href="mailto:support@innovation-hub.app">support@innovation-hub.app</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-md-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('assets/images/shapes/shape-21-01.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('assets/images/shapes/shape-35.png') }}" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area copyright-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <p>Copyright {{ now()->format('Y') }} <a href="{{ route('home') }}">Innovation Hub</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
