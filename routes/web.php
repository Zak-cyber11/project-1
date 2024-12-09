<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/sales', [App\Http\Controllers\SalesController::class, 'index']);

Route::get('/api/orders', [App\Http\Controllers\OrdersController::class, 'index']);

Route::get('/api/stocks', [App\Http\Controllers\StocksController::class, 'index']);

Route::get('/api/incomes', [App\Http\Controllers\IncomesController::class, 'index']);
