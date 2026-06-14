<x-layout>

    <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-start">
                        <div class="page-title">
                            <h3 class="title">{{ $activity->name }} Activity</h3>
                        </div>
                        <nav class="edu-breadcrumb-nav">
                            <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                <li class="breadcrumb-item active" aria-current="page">Activities</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="{{ asset('assets/images/shapes/shape-11-07.png') }}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="{{ asset('assets/images/shapes/shape-01-02.png') }}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="{{ asset('assets/images/shapes/shape-03.png') }}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="{{ asset('assets/images/shapes/shape-13-12.png') }}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-5">
                            <img src="{{ asset('assets/images/shapes/shape-36.png') }}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-6">
                            <img src="{{ asset('assets/images/shapes/shape-05-07.png') }}" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="login-register-page-wrapper edu-section-gap bg-color-white">
        <div class="container checkout-page-style">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="login-form-box">
                        <form class="login-form" action="{{ route('register.activity') }}" method="post">
                            @csrf
                            <input type="hidden" name="activity_id" value="{{ $activity->id }}">
                            <h3>Register now to get the Activity</h3>
                            <div class="input-box mb--30">
                                <input type="text" name="name" placeholder="Full Name" required />
                            </div>
                            <div class="input-box mb--30">
                                <input type="email" name="email" placeholder="Email" required />
                            </div>
                            <div class="input-box mb--30">
                                <input type="text" name="whatsapp" placeholder="whatsapp number" />
                            </div>

                            <button class="rn-btn edu-btn w-100 mb--30" type="submit">
                                <span>Submit</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>

