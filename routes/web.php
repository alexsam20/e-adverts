<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/cabinet', [\App\Http\Controllers\Cabinet\HomeController::class, 'index'])->name('cabinet');
