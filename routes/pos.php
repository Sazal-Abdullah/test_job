<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\POSController;





Route::prefix('pos')->middleware(['auth'])->group(function () {
    Route::get('/', [POSController::class, 'index'])->name('pos.index'); // POS page
    // Route::post('/cart', [POSController::class, 'addToCart'])->name('pos.cart.add'); // Add to cart
    Route::post('/order', [POSController::class, 'placeOrder'])->name('pos.order.place'); // Place order
    Route::get('/orders', [POSController::class, 'orderList'])->name('pos.orders.list'); // Order list

    Route::post('/pos/cart/add', [POSController::class, 'addToCart'])->name('pos.cart.add');
    Route::post('/pos/cart/update', [POSController::class, 'updateCart'])->name('pos.cart.update');
    Route::post('/pos/cart/remove', [POSController::class, 'removeFromCart'])->name('pos.cart.remove');


});
