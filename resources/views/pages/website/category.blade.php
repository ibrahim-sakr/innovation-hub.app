<x-layout>

    <div class="edu-event-details-area edu-event-details edu-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="thumbnail">
                        <img src="{{ asset($category->image) }}" alt="Event Images">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="content">
                        <h3 class="title">{{ $category->title }}</h3>
                        {!! $category->description !!}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="eduvibe-sidebar">
                        <div class="eduvibe-widget eduvibe-widget-details">
                            <h5 class="title">Event Detail</h5>
                            <div class="widget-content">
                                <ul>
                                    <li><span><i class="icon-calendar-2-line"></i> Start Date</span><span>{{ $category->start_date }}</span></li>
                                    <li><span><i class="icon-time-line"></i> Start Time</span><span>{{ $category->start_time }}</span></li>
                                    <li><span><i class="icon-map-pin-line"></i> Location</span><span>{{ $category->location }}</span></li>
                                </ul>

                                <div class="read-more-btn mt--15">
                                    <button class="edu-btn w-100 text-center search-trigger">Book Your Seat Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <h3 class="mb-30">Book {{ $category->name }}</h3>
                <form class="login-form" action="{{ route('register.category') }}" method="post">
                    @csrf
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
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
                    <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                        <span>Book Now</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Search Popup  -->
</x-layout>
