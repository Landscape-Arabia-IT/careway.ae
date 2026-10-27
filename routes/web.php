<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BusinessMenController;
use App\Http\Controllers\TransportController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Business Men Services routes
Route::get('/business-men', [BusinessMenController::class, 'comingSoon'])->name('business-men.coming-soon');

// Transport and Customs Clearance routes
Route::get('/transport', [TransportController::class, 'comingSoon'])->name('transport.coming-soon');
