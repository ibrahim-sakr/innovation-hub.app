<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/activities', [PageController::class, 'activities'])->name('activities');
Route::get('/activity/{activity}', [PageController::class, 'activity'])->name('activity');
Route::get('/competitions', [PageController::class, 'competitions'])->name('competitions');
Route::get('/competition/{competition}', [PageController::class, 'competition'])->name('competition');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/course/{course}', [PageController::class, 'course'])->name('course');
Route::get('/feedback', [PageController::class, 'feedback'])->name('feedback');
Route::get('/we-are-hiring', [PageController::class, 'weAreHiring'])->name('we-are-hiring');
Route::get('/join-us', [PageController::class, 'joinUs'])->name('join-us');
Route::get('/mental-math', [PageController::class, 'mentalMath'])->name('mental-math');
