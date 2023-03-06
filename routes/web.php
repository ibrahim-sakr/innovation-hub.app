<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class, 'feedback'])->name('feedback.feedback');
