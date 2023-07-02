<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Competition;
use App\Models\Course;
use Illuminate\Contracts\View\View;
//use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(): View
    {

        return view('pages.website.home', [
            'courses' => Course::where('feature', 1)->get(),
            'competitions' => Competition::all(),
            'activities' => Activity::all(),
        ]);
    }

    public function activities(): View
    {
        return view('pages.website.activities');
    }

    public function activity(): View
    {
        return view('pages.website.activity');
    }

    public function competitions(): View
    {
        return view('pages.website.competitions');
    }

    public function competition(int $competition): View
    {

        return view('pages.website.competition', [
            'competition' => Competition::with('categories')->find($competition)
        ]);
    }

    public function category(int $category): View
    {

        return view('pages.website.category', [
            'category' => Category::find($category)
        ]);
    }

    public function courses(): View
    {
        $courses = Course::all();

        return view('pages.website.courses', [
            'courses' => $courses
        ]);
    }

    public function course(int $course): View
    {
        $course = Course::findOrFail($course);

        return view('pages.website.course', [
            'course' => $course
        ]);
    }

    public function feedback(): View
    {
        return view('pages.website.feedback');
    }

    public function weAreHiring(): View
    {
        return view('pages.website.hiring');
    }

    public function joinUs(): View
    {
        return view('pages.website.join-us');
    }

    public function mentalMath(): View
    {
        return view('pages.website.mental-math');
    }
}
