<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'showIndex'])->name('home');

Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/sort', [MainController::class, 'sortArray'])->name('sort');

Route::get('/shuffle', [MainController::class, 'shuffleArray'])->name('shuffle');

Route::get('/filter', [MainController::class, 'filterArray'])->name('filter');
