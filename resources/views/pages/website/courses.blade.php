<x-comming-soon></x-comming-soon>

{{--<x-layout>--}}

{{--    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">--}}
{{--        <div class="container eduvibe-animated-shape">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="breadcrumb-inner text-start">--}}
{{--                        <div class="page-title">--}}
{{--                            <h3 class="title">Courses List</h3>--}}
{{--                        </div>--}}
{{--                        <nav class="edu-breadcrumb-nav">--}}
{{--                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">--}}
{{--                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>--}}
{{--                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>--}}
{{--                                <li class="breadcrumb-item active" aria-current="page">Courses List</li>--}}
{{--                            </ol>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">--}}
{{--                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">--}}
{{--                    <div class="shape-image shape-image-1">--}}
{{--                        <img src="{{ asset('assets/images/shapes/shape-11-07.png') }}" alt="Shape Thumb" />--}}
{{--                    </div>--}}
{{--                    <div class="shape-image shape-image-2">--}}
{{--                        <img src="{{ asset('assets/images/shapes/shape-01-02.png') }}" alt="Shape Thumb" />--}}
{{--                    </div>--}}
{{--                    <div class="shape-image shape-image-3">--}}
{{--                        <img src="{{ asset('assets/images/shapes/shape-03.png') }}" alt="Shape Thumb" />--}}
{{--                    </div>--}}
{{--                    <div class="shape-image shape-image-4">--}}
{{--                        <img src="{{ asset('assets/images/shapes/shape-13-12.png') }}" alt="Shape Thumb" />--}}
{{--                    </div>--}}
{{--                    <div class="shape-image shape-image-5">--}}
{{--                        <img src="{{ asset('assets/images/shapes/shape-36.png') }}" alt="Shape Thumb" />--}}
{{--                    </div>--}}
{{--                    <div class="shape-image shape-image-6">--}}
{{--                        <img src="{{ asset('assets/images/shapes/shape-05-07.png') }}" alt="Shape Thumb" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="edu-course-area eduvibe-home-two-course course-three-wrapper edu-section-gap bg-color-white">--}}
{{--        <div class="container eduvibe-animated-shape">--}}
{{--            <div class="row g-5 align-items-center mb--30">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">--}}
{{--                        <span class="pre-title">Who We Are</span>--}}
{{--                        <h3 class="title">We Offer The Best Carrier</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end">--}}
{{--                        <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>--}}
{{--                        <button data-filter=".coding"><span class="filter-text">Coding</span></button>--}}
{{--                        <button data-filter=".robotics"><span class="filter-text">Robotics</span></button>--}}
{{--                        <button data-filter=".mental-math"><span class="filter-text">Mental Math</span></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row g-5">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="grid-metro3 mesonry-list">--}}
{{--                        <div class="resizer"></div>--}}
{{--                        @foreach($courses as $course)--}}
{{--                            <!-- Start Single Card  -->--}}
{{--                            <div class="grid-metro-item cat--1 {{ Str::snake($course->level, '-') }}">--}}
{{--                                <div class="edu-card card-type-3 radius-small">--}}
{{--                                    <div class="inner">--}}
{{--                                        <div class="thumbnail">--}}
{{--                                            <a href="{{ route('course', ['course' => $course->id]) }}">--}}
{{--                                                <img class="w-100" src="{{ asset($course->thumbnail) }}" alt="Course Meta">--}}
{{--                                            </a>--}}
{{--                                            <div class="top-position status-group left-bottom">--}}
{{--                                                <span class="eduvibe-status status-03">{{ $course->level }}</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="content">--}}
{{--                                            <div class="card-top">--}}
{{--                                                <ul class="edu-meta meta-02">--}}
{{--                                                    <li>--}}
{{--                                                        <i class="icon-file-list-3-line"></i>{{ $course->lessons_count }} Lessons--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <i class="icon-time-line"></i>{{ sprintf('%dh %dm', $course->duration / 60, $course->duration % 60) }}--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <h6 class="title">--}}
{{--                                                <a href="{{ route('course', ['course' => $course->id]) }}">--}}
{{--                                                    {{ $course->name }}--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}
{{--                                            <div class="card-bottom">--}}
{{--                                                <div class="price-list price-style-02">--}}
{{--                                                    <div class="price current-price">$55.99</div>--}}
{{--                                                    <div class="price old-price">$65.99</div>--}}
{{--                                                </div>--}}
{{--                                                <div class="edu-rating rating-default">--}}
{{--                                                    <div class="rating">--}}
{{--                                                        <i class="icon-Star"></i>--}}
{{--                                                        <i class="icon-Star"></i>--}}
{{--                                                        <i class="icon-Star"></i>--}}
{{--                                                        <i class="icon-Star"></i>--}}
{{--                                                        <i class="icon-Star"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <span class="rating-count">(30)</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    <div class="card-hover-action">--}}
{{--                                        <div class="hover-content">--}}
{{--                                            <div class="content-top">--}}
{{--                                                <div class="top-status-bar">--}}
{{--                                                    <span class="eduvibe-status status-03">{{ $course->level }}</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <h6 class="title">--}}
{{--                                                <a href="{{ route('course', ['course' => $course->id]) }}">--}}
{{--                                                    {{ $course->name }}--}}
{{--                                                </a>--}}
{{--                                            </h6>--}}

{{--                                            <p class="description">--}}
{{--                                                {{ substr($course->description, 0, 200) }}...--}}
{{--                                            </p>--}}

{{--                                            <div class="price-list price-style-02">--}}
{{--                                                <div class="price current-price">$55.99</div>--}}
{{--                                                <div class="price old-price">$69.99</div>--}}
{{--                                            </div>--}}

{{--                                            <div class="hover-bottom-content">--}}
{{--                                                <ul class="edu-meta meta-02">--}}
{{--                                                    <li>--}}
{{--                                                        <i class="icon-file-list-3-line"></i>{{ $course->lessons_count }} Lessons--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <i class="icon-time-line"></i>{{ sprintf('%dh %dm', $course->duration / 60, $course->duration % 60) }}--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}


{{--                                            <div class="read-more-btn">--}}
{{--                                                <a class="edu-btn btn-medium btn-white" href="{{ route('course', ['course' => $course->id]) }}">--}}
{{--                                                    Enroll Now<i class="icon-arrow-right-line-right"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- End Single Card  -->--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</x-layout>--}}
