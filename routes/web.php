<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;

Route::get('/', [MainController::class, 'showIndex'])->name('home');
Route::get('/array', [MainController::class, 'showArray'])->name('array');
Route::get('/sort', [MainController::class, 'sortArray'])->name('sort');
Route::get('/shuffle', [MainController::class, 'shuffleArray'])->name('shuffle');
Route::get('/filter', [MainController::class, 'filterArray'])->name('filter');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');
Route::post('/reports/store', [ReportController::class, 'store'])->name('reports.store');
Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');
Route::get('/reports/{report}/edit', [ReportController::class, 'edit'])->name('reports.edit');
Route::put('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');
