<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::group([], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

});
