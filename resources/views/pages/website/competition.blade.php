<x-layout>

    <div class="slider-area banner-style-2 bg-image d-flex align-items-center">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="inner">
                        <div class="content">
                            <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                {{ $competition->slug }}
                            </span>
                            <h1 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                                {{ $competition->name }}
                            </h1>
                            <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                {{ $competition->description }}
                            </p>
                            <div class="read-more-btn" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="#">Get Started Today <i class="icon-arrow-right-line-right"></i></a>
                            </div>
                            <div class="arrow-sign d-lg-block d-none">
                                <img src="{{ asset('assets/images/banner/banner-02/arrow.png') }}" alt="Banner Images" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="banner-thumbnail">
                        <img class="girl-thumb" src="{{ asset('assets/images/banner/banner-02/banner-01.png') }}" alt="Girl Images" data-sal-delay="150" data-sal="fade" data-sal-duration="800" />
                    </div>
                    <div class="banner-bg d-lg-block d-none">
                        <img class="girl-bg" src="{{ asset('assets/images/banner/banner-02/girl-bg.png') }}" alt="Girl Background" data-sal-delay="150" data-sal="fade" data-sal-duration="800" />
                    </div>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('assets/images/shapes/shape-19.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('assets/images/shapes/shape-05-01.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('assets/images/shapes/shape-19-01.png') }}" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>

    <div class="eduvibe-home-five-cats edu-about-area about-style-5 edu-section-gapTop bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">TOP CATEGORIES</span>
                        <h3 class="title">Browse Popular Category</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mt--60 mb_dec--20 slick-activation-wrapper service-activation-item5 edu-slick-arrow-top">
                    <!-- Start Single Service  -->
                    <div class="single-slick-card">
                        <div class="service-card service-card-8 shape-bg-1">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/category/category-04/category-01.png') }}" alt="Icons">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Art & Design</a></h6>
                                    <span>23 Items</span>
                                </div>
                                <div class="hover-action">
                                    <a class="read-more-btn" href="#"><i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="single-slick-card">
                        <div class="service-card service-card-8 shape-bg-2">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/category/category-04/category-02.png') }}" alt="Icons">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Content Writting</a></h6>
                                    <span>39 Items</span>
                                </div>
                                <div class="hover-action">
                                    <a class="read-more-btn" href="#"><i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="single-slick-card">
                        <div class="service-card service-card-8 shape-bg-3">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/category/category-04/category-03.png') }}" alt="Icons">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Data Science</a></h6>
                                    <span>15 Items</span>
                                </div>
                                <div class="hover-action">
                                    <a class="read-more-btn" href="#"><i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="single-slick-card">
                        <div class="service-card service-card-8 shape-bg-4">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/category/category-04/category-04.png') }}" alt="Icons">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Health & Fitness</a></h6>
                                    <span>36 Items</span>
                                </div>
                                <div class="hover-action">
                                    <a class="read-more-btn" href="#"><i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="single-slick-card">
                        <div class="service-card service-card-8 shape-bg-5">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/category/category-04/category-05.png') }}" alt="Icons">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Music Learning</a></h6>
                                    <span>59 Items</span>
                                </div>
                                <div class="hover-action">
                                    <a class="read-more-btn" href="#"><i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="single-slick-card">
                        <div class="service-card service-card-8 shape-bg-3">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/category/category-04/category-06.png') }}" alt="Icons">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Data Science</a></h6>
                                    <span>45 Items</span>
                                </div>
                                <div class="hover-action">
                                    <a class="read-more-btn" href="#"><i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('assets/images/shapes/shape-07.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('assets/images/shapes/shape-03-05.png') }}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('assets/images/shapes/shape-04-06.png') }}" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>

    <div class="edu-course-area edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5 mt--10">
                @foreach($competition->categories as $category)
                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-3 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('assets/images/course/course-01/course-01.jpg') }}" alt="Course Thumb">
                                    </a>
{{--                                    <div class="wishlist-top-right">--}}
{{--                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>--}}
{{--                                    </div>--}}
                                    <div class="top-position status-group left-bottom">
                                        <span class="eduvibe-status status-03">
                                            age ({{ $category->age_to ? $category->age_from . ' - ' . $category->age_to : $category->age_from . '+'}})
                                        </span>
                                    </div>
                                </div>
                                <div class="content">
{{--                                    <div class="card-top">--}}
{{--                                        <div class="author-meta">--}}
{{--                                            <div class="author-thumb">--}}
{{--                                                <a href="instructor-profile.html">--}}
{{--                                                    <img src="{{ asset('assets/images/instructor/instructor-small/instructor-2.jpg') }}" alt="Author Images">--}}
{{--                                                    <span class="author-title">Nancy Phipps</span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="edu-meta meta-02">--}}
{{--                                            <li><i class="icon-file-list-3-line"></i>29 Lessons</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
                                    <h6 class="title">
                                        <a href="#">
                                            {{ $category->name }}
                                        </a>
                                    </h6>
{{--                                    <div class="card-bottom">--}}
{{--                                        <div class="price-list price-style-02">--}}
{{--                                            <div class="price current-price">$29.99</div>--}}
{{--                                            <div class="price old-price">$39.99</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="edu-rating rating-default">--}}
{{--                                            <div class="rating">--}}
{{--                                                <i class="icon-Star"></i>--}}
{{--                                                <i class="icon-Star"></i>--}}
{{--                                                <i class="icon-Star"></i>--}}
{{--                                                <i class="icon-Star"></i>--}}
{{--                                                <i class="icon-Star"></i>--}}
{{--                                            </div>--}}
{{--                                            <span class="rating-count">(18)</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>

                            <div class="card-hover-action">
                                <div class="hover-content">
                                    <div class="content-top">
                                        <div class="top-status-bar">
                                            <span class="eduvibe-status status-03">
                                                age ({{ $category->age_to ? $category->age_from . ' - ' . $category->age_to : $category->age_from . '+'}})
                                            </span>
                                        </div>
{{--                                        <div class="top-wishlist-bar">--}}
{{--                                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>--}}
{{--                                        </div>--}}
                                    </div>

                                    <h6 class="title">
                                        <a href="{{ route('category', ['category' => $category->id]) }}">
                                            {{ $category->name }}
                                        </a>
                                    </h6>

                                    <p class="description">
                                        {!! $category->description !!}
                                    </p>

{{--                                    <div class="price-list price-style-02">--}}
{{--                                        <div class="price current-price">$29.99</div>--}}
{{--                                        <div class="price old-price">$39.99</div>--}}
{{--                                    </div>--}}

{{--                                    <div class="hover-bottom-content">--}}
{{--                                        <div class="author-meta">--}}
{{--                                            <div class="author-thumb">--}}
{{--                                                <a href="instructor-profile.html">--}}
{{--                                                    <img src="{{ asset('assets/images/instructor/instructor-small/instructor-2.jpg') }}" alt="Author Images">--}}
{{--                                                    <span class="author-title">Nancy Phipps</span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <ul class="edu-meta meta-02">--}}
{{--                                            <li><i class="icon-file-list-3-line"></i>29 Lessons</li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
                                    <div class="read-more-btn">
                                        <a class="edu-btn btn-medium btn-white" href="{{ route('category', ['category' => $category->id]) }}">
                                            Details<i class="icon-arrow-right-line-right"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
