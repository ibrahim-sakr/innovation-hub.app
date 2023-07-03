<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/activities', [PagesController::class, 'activities'])->name('activities');
Route::get('/activity/{activity}', [PagesController::class, 'activity'])->name('activity');
Route::get('/competitions', [PagesController::class, 'competitions'])->name('competitions');
Route::get('/competition/{competition}', [PagesController::class, 'competition'])->name('competition');
Route::get('/category/{category}', [PagesController::class, 'category'])->name('category');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/course/{course}', [PagesController::class, 'course'])->name('course');
Route::get('/feedback', [PagesController::class, 'feedback'])->name('feedback');
Route::get('/hiring', [PagesController::class, 'hiring'])->name('hiring');
//Route::get('/join', [PagesController::class, 'join'])->name('join');
Route::get('/mental-math', [PagesController::class, 'mentalMath'])->name('mental-math');

Route::name('register.')->prefix('registration')->group(function(){
    Route::post('/free-session', [RegistrationController::class, 'freeSession'])->name('free-session');
    Route::post('/course', [RegistrationController::class, 'course'])->name('course');
    Route::post('/category', [RegistrationController::class, 'category'])->name('category');
    Route::post('/activity', [RegistrationController::class, 'activity'])->name('activity');
    Route::post('/feedback', [RegistrationController::class, 'feedback'])->name('feedback');
    Route::post('/hiring', [RegistrationController::class, 'hiring'])->name('hiring');
});
