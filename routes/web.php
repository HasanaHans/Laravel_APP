<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalwaController;

Route::get('', [HalwaController::class, 'index'] );

Route::get('/halwa', [HalwaController::class, 'index'] );

Route::get('/halwa/create', [HalwaController::class, 'create']);

Route::get('/halwa/about', [HalwaController::class, 'about']);

Route::post('/halwa', [HalwaController::class, 'store']);

Route::get('/halwa/search', [HalwaController::class, 'search'])->name('halwa.search');

Route::get('/halwa/{id}', [HalwaController::class, 'show']);

Route::get('/halwa/{id}/edit', [HalwaController::class, 'edit']);

Route::patch('/halwa/{id}', [HalwaController::class, 'update']);

Route::delete('/halwa/{id}', [HalwaController::class, 'destroy']);



