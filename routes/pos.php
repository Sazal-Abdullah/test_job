<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\POSController;



Auth::routes();

Route::prefix('pos')->middleware(['auth'])->group(function () {
    Route::get('/', [POSController::class, 'index'])->name('pos.index'); // POS page
    Route::post('/cart', [POSController::class, 'addToCart'])->name('pos.cart.add'); // Add to cart
    Route::post('/order', [POSController::class, 'placeOrder'])->name('pos.order.place'); // Place order
    Route::get('/orders', [POSController::class, 'orderList'])->name('pos.orders.list'); // Order list



});
