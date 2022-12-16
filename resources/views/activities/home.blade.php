@extends('activities.layout')

@section('main')
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 text-center">
            <h3 class="text-white mb-4 animated slideInDown">Binary Code Activity</h3>
            <p><span class="text-light"> إستمتعوا بالنشاط وشاركونا في التعليقات بنشاطكم</span></p>
            <a href="/binary-code" class="btn btn-lg btn-warning">اذهب الى النشاط</a>

            <h3 class="text-white mb-4 animated slideInDown mt-5">Multiplication Table Activity</h3>
            <p><span class="text-light"> إستمتعوا بالنشاط وشاركونا في التعليقات بنشاطكم</span></p>
            <a href="/multiplication-table" class="btn btn-lg btn-warning">اذهب الى النشاط</a>
        </div>
        <div class="col-lg-6 text-center">
            <img class="img-fluid rounded animated zoomIn" src="{{ asset('activities/img/home-main.webp') }}"
                 alt="">
        </div>
    </div>
@endsection
