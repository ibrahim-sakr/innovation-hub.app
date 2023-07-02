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
                        <h3 class="title">UI/UX Design & Development Contest 2022</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod te invidunt. ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam. et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        <ul class="column-gallery gallery-column-2">
                            <li><img src="{{ asset('assets/images/event/event-details/event-gallery-01.jpg') }}" alt="Gallery Images"></li>
                            <li><img src="{{ asset('assets/images/event/event-details/event-gallery-02.jpg') }}" alt="Gallery Images"></li>
                        </ul>
                        <h4>Four major elements that we offer:</h4>
                        <ul class="list-style-1 mb--20">
                            <li><i class="icon-checkbox-circle-fill-solid"></i> Struggling to sell one multi-million dollar home currently on the market</li>
                            <li><i class="icon-checkbox-circle-fill-solid"></i> The point of using Lorem Ipsum is that it has a normal distribution of letters.</li>
                            <li><i class="icon-checkbox-circle-fill-solid"></i> Publishing packages and web page editors now use their default model text.</li>
                            <li><i class="icon-checkbox-circle-fill-solid"></i> Publishing packages and web page editors now use their default model text.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod te invidunt. ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam. et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
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

                                <div class="read-more-btn mt--45">
                                    <a class="edu-btn btn-bg-alt w-100 text-center" href="#">Price: $79.00</a>
                                </div>

                                <div class="read-more-btn mt--15">
                                    <a class="edu-btn w-100 text-center" href="#">Book Your Seat Now</a>
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

</x-layout>
