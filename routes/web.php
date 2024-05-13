<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\HistoryController;

Route::get('/', [MovieController::class, 'index']);

Route::get('/seat/{time}/{id}', [MovieController::class, 'seat']);
Route::post('/seat/order', [MovieController::class, 'store']);

Route::get('print/{id}', [PrintController::class, 'print']);

Route::get('history', [HistoryController::class, 'index']);
Route::get('/history/delete/{id}', [HistoryController::class, 'destroy']);
