<?php

// Admin Routes
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function () {
    Route::put('orders/{order}/status', [OrderController::class, 'updateStatus']); // Update order status
});
