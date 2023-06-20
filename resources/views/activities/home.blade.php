@extends('activities.layout')

@section('main')
    <div class="row g-5 align-items-center">
        <div class="col-lg-4 text-center">
            <h3 class="text-white mb-4 animated slideInDown">Binary Code Activity</h3>
            <p><span class="text-light"> إستمتعوا بالنشاط وشاركونا في التعليقات بنشاطكم</span></p>
            <a href="/binary-code" class="btn btn-lg btn-warning">اذهب الى النشاط</a>
        </div>
        <div class="col-lg-4 text-center">
            <h3 class="text-white mb-4 animated slideInDown">Multiplication Table Activity</h3>
            <p><span class="text-light"> إستمتعوا بالنشاط وشاركونا في التعليقات بنشاطكم</span></p>
            <a href="/multiplication-table" class="btn btn-lg btn-warning">اذهب الى النشاط</a>
        </div>




        <div class="col-lg-4 text-center">
            <h3 class="text-white mb-4 animated slideInDown">Sequencing And Debugging</h3>
            <p><span class="text-light"> إستمتعوا بالنشاط وشاركونا في التعليقات بنشاطكم</span></p>
            <a href="/sequencing-and-debugging" class="btn btn-lg btn-warning">اذهب الى النشاط</a>

            {{--            <div id="activities-slider" class="carousel slide" data-bs-ride="false">--}}
            {{--                <div class="carousel-indicators">--}}
            {{--                    <button type="button" data-bs-target="#activities-slider" data-bs-slide-to="0" class="active"--}}
            {{--                            aria-current="true" aria-label="Binary Code"></button>--}}
            {{--                    <button type="button" data-bs-target="#activities-slider" data-bs-slide-to="1"--}}
            {{--                            aria-label="Multiplication Table"></button>--}}
            {{--                    <button type="button" data-bs-target="#activities-slider" data-bs-slide-to="2"--}}
            {{--                            aria-label="Sequencing And Debugging"></button>--}}
            {{--                </div>--}}
            {{--                <div class="carousel-inner">--}}
            {{--                    <div class="carousel-item active">--}}
            {{--                        <img src="{{ asset('activities/img/binary-code-main.jpeg') }}" class="d-block w-100" alt="Binary Code">--}}
            {{--                        <div class="carousel-caption d-none d-md-block">--}}
            {{--                            <h5>First slide label</h5>--}}
            {{--                            <p>Some representative placeholder content for the first slide.</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="carousel-item">--}}
            {{--                        <img src="{{ asset('activities/img/multiplication-table-main.jpeg') }}" class="d-block w-100" alt="Multiplication Table">--}}
            {{--                        <div class="carousel-caption d-none d-md-block">--}}
            {{--                            <h5>Second slide label</h5>--}}
            {{--                            <p>Some representative placeholder content for the second slide.</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="carousel-item">--}}
            {{--                        <img src="{{ asset('activities/img/sequencing-and-debugging-main.jpeg') }}" class="d-block w-100" alt="Sequencing And Debugging">--}}
            {{--                        <div class="carousel-caption d-none d-md-block">--}}
            {{--                            <h5>Third slide label</h5>--}}
            {{--                            <p>Some representative placeholder content for the third slide.</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <button class="carousel-control-prev" type="button" data-bs-target="#activities-slider"--}}
            {{--                        data-bs-slide="prev">--}}
            {{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--                    <span class="visually-hidden">Previous</span>--}}
            {{--                </button>--}}
            {{--                <button class="carousel-control-next" type="button" data-bs-target="#activities-slider"--}}
            {{--                        data-bs-slide="next">--}}
            {{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--                    <span class="visually-hidden">Next</span>--}}
            {{--                </button>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection
