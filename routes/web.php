<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdatePasswordController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
});


Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'index']);

Route::get('/', [MovieController::class, 'index'])->middleware('auth');


Route::middleware('auth')->group(function () {
    // metode grup
    Route::get('/seat/{time}/{id}', [MovieController::class, 'seat']);
    Route::post('/seat/order', [MovieController::class, 'store']);

    Route::get('print/{id}', [PrintController::class, 'print']);

    Route::get('edit', [UpdatePasswordController::class, 'edit'])->name('update-password');
    Route::post('edit', [UpdatePasswordController::class, 'update'])->name('update-password');

    Route::get('history', [HistoryController::class, 'index']);
    Route::get('/history/delete/{id}', [HistoryController::class, 'destroy']);

    Route::get('/logout', [LoginController::class, 'logout']);
})->name('login');
