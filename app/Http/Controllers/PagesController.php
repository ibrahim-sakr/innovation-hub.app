<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Competition;
use App\Models\Course;
use Illuminate\Contracts\View\View;
//use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(): View
    {

        return view('pages.home', [
            'courses' => Course::where('feature', 1)->get(),
            'competitions' => Competition::all(),
            'activities' => Activity::all(),
        ]);
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

    public function competition(int $competition): View
    {

        return view('pages.competition', [
            'competition' => Competition::with('categories')->find($competition)
        ]);
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
