<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalwaController;
use App\Http\Controllers\AuthController;


Route::get('/', [HalwaController::class, 'index'] );

Route::get('/halwa', [HalwaController::class, 'index'] );

Route::get('/halwa/create', [HalwaController::class, 'create'])->middleware(['auth', 'can:edit']);

Route::get('/halwa/about', [HalwaController::class, 'about'])->middleware(['auth', 'can:edit']);

Route::post('/halwa', [HalwaController::class, 'store']);

Route::get('/halwa/search', [HalwaController::class, 'search'])->name('halwa.search');

Route::get('/halwa/{id}', [HalwaController::class, 'show']);

Route::get('/halwa/{id}/edit', [HalwaController::class, 'edit']);

Route::patch('/halwa/{id}', [HalwaController::class, 'update'])->middleware(['auth', 'can:edit']);

Route::delete('/halwa/{id}', [HalwaController::class, 'destroy'])->middleware(['auth', 'can:edit']);



Route::get('/login', [AuthController::class, 'index'])->name("login");

Route::post('/login', [AuthController::class, 'login']);



Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');












