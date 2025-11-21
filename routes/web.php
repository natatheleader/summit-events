<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

Route::post('/events/{slug}/register', [EventController::class, 'register'])->name('events.register');