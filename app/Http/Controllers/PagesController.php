<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
//use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function activities(): View
    {
        return view('pages.activities');
    }

    public function activity(): View
    {
        return view('pages.activity');
    }

    public function competitions(): View
    {
        return view('pages.competitions');
    }

    public function competition(): View
    {
        return view('pages.competition');
    }

    public function category(): View
    {
        return view('pages.category');
    }

    public function courses(): View
    {
        return view('pages.courses');
    }

    public function course(): View
    {
        return view('pages.course');
    }

    public function feedback(): View
    {
        return view('pages.feedback');
    }

    public function weAreHiring(): View
    {
        return view('pages.hiring');
    }

    public function joinUs(): View
    {
        return view('pages.join-us');
    }

    public function mentalMath(): View
    {
        return view('pages.mental-math');
    }
}
