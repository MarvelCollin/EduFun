<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PopularController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.show');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/popular', [PopularController::class, 'index'])->name('popular');
