@extends('activities.layout')

@section('main')
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 text-center">
            @if(Session::has('info'))
                <div class="container alert alert-info">
                    {{ Session::get('info') }}
                </div>
            @endif
            @if(Session::has('fail'))
                <div class="container alert alert-success">
                    {{ Session::get('fail') }}
                </div>
            @endif
            @if(Session::has('success'))
                <div class="container alert alert-warning">
                    {{ Session::get('success') }}
                </div>
            @endif
            <h1 class="text-white mb-4 animated slideInDown">{{ $title }} Activity</h1>
            <p class="text-white pb-3 animated slideInDown"><span class="h2 text-white">لكي تحصل علي النشاط قم بتسجيل إسمك والبريد الإلكتروني وسوف نرسل النشاط علي بريدك الإلكتروني</span>
            </p>
            <p><span class="h3 text-light"> إستمتعوا بالنشاط وشاركونا في التعليقات بنشاطكم</span></p>
            <a href="#contact-form" class="btn btn-lg btn-warning">اشترك الان</a>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded animated zoomIn" src="{{ asset('activities/img/multiplication-table-main.jpeg') }}"
                 alt="">
        </div>
    </div>
@endsection
