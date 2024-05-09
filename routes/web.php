<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'LandingPage'])->name('landing-page');

Route::get('/welcome', function () {
    return view('welcome');
});

