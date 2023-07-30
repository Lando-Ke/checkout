<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/cart', [CartController::class, 'getContent']);
Route::post('/cart/add/{product}', [CartController::class, 'add']);

Route::post('/purchase', [UserController::class, 'purchase']);
