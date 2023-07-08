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
{{--                        <p>FIRST ® LEGO® League Discover is the youngest of three divisions of FIRST LEGO League, created to inspire youth to experiment and grow their critical thinking, coding, and design skills through fun handson STEM learning and robotics.</p>--}}
{{--                        <p>All FIRST ® programs are built on a foundation of Core Values, celebrating discovery, impact, inclusion, innovation, teamwork and fun.</p>--}}

{{--                        <ul class="column-gallery gallery-column-2">--}}
{{--                            <li><img src="{{ asset('assets/images/s3/uploads/3.jpg') }}" alt="Gallery Images"></li>--}}
{{--                            <li><img src="{{ asset('assets/images/s3/uploads/5.jpg') }}" alt="Gallery Images"></li>--}}
{{--                        </ul>--}}

{{--                        <h4>What have teams been doing?</h4>--}}
{{--                        <p>Teams of children ages 4-6 have been given meaningful problems to solve linked to a relevant real-world theme. They have designed and built solutions, learning how to work together to develop their ideas. Using LEGO Education STEAM Park sets, they have iterated on their DUPLO® constructions and shared their achievements with others.</p>--}}

{{--                        <h4>WHAT’S HAPPENING?</h4>--}}
{{--                        <ul class="list-style-1 mb--20">--}}
{{--                            <li><i class="icon-checkbox-circle-fill-solid"></i> Building: Teams will work together to build a (team) model that showcases all they have learned about the real-world problem they investigated.</li>--}}
{{--                            <li><i class="icon-checkbox-circle-fill-solid"></i> Special Challenge: Different teams will be matched with each other to solve a special challenge to design and build a new part that will join their models together.</li>--}}
{{--                            <li><i class="icon-checkbox-circle-fill-solid"></i> Reviewing: As children are working, the reviewers will talk with them about what and how they are building. The teams will explain their designs and the work in their Engineering Notebooks.</li>--}}
{{--                            <li><i class="icon-checkbox-circle-fill-solid"></i> Celebration: The event will end in an award ceremony where each child is celebrated for their amazing achievements. Confidence is boosted as the children receive recognition for their hard work</li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="eduvibe-sidebar">
                        <div class="eduvibe-widget eduvibe-widget-details">
                            <h5 class="title">Event Detail</h5>
                            <div class="widget-content">
                                <ul>
                                    <li><span><i class="icon-calendar-2-line"></i> Start Date</span><span>25 Dec, 2022</span></li>
                                    <li><span><i class="icon-time-line"></i> Start Time</span><span>6:00 PM</span></li>
                                    <li><span><i class="icon-calendar-2-line"></i> End Date</span><span>30 Nov, 2022</span></li>
                                    <li><span><i class="icon-time-line"></i> End Time</span><span>12:00 PM</span></li>
                                    <li><span><i class="icon-user-line"></i> Ongoing</span><span>983+</span></li>
                                    <li><span><i class="icon-map-pin-line"></i> Location</span><span>New Margania</span></li>
                                </ul>

                                <div class="read-more-btn mt--15">
                                    <button class="edu-btn w-100 text-center search-trigger">Book Your Seat Now</button>
                                </div>

                                <div class="read-more-btn mt--30 text-center">
                                    <div class="eduvibe-post-share">
                                        <span>Share: </span>
                                        <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                        <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                        <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                        <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="eduvibe-widget eduvibe-widget-details mt--40">
                            <h5 class="title">Map</h5>
                            <div class="widget-content">
                                <div class="google-map">
                                    <iframe class="radius-small w-100" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" height="290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
