<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/', [FeedbackController::class, 'feedback'])->name('feedback.feedback');
