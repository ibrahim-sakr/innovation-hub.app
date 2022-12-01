<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ActivityController::class, 'index']);
Route::get('/{name}', [ActivityController::class, 'activity'])->name('activities');
Route::post('/contact', [ActivityController::class, 'contact'])->name('contact');
