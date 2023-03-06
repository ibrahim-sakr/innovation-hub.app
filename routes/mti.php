<?php

use App\Http\Controllers\MtiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MtiController::class, 'index'])->name('mti.index');
Route::post('/', [MtiController::class, 'feedback'])->name('mti.feedback');
