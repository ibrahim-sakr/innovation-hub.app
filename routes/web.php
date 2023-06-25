<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/activities-old', [PagesController::class, 'activities'])->name('activities-old');
Route::get('/activity/{activity}', [PagesController::class, 'activity'])->name('activity');
Route::get('/competitions', [PagesController::class, 'competitions'])->name('competitions');
Route::get('/competition/{competition}', [PagesController::class, 'competition'])->name('competition');
Route::get('/category/{category}', [PagesController::class, 'category'])->name('category');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/course/{course}', [PagesController::class, 'course'])->name('course');
Route::get('/feedback-old', [PagesController::class, 'feedback'])->name('feedback-old');
Route::get('/we-are-hiring', [PagesController::class, 'weAreHiring'])->name('we-are-hiring');
Route::get('/join-us', [PagesController::class, 'joinUs'])->name('join-us');
Route::get('/mental-math', [PagesController::class, 'mentalMath'])->name('mental-math');
