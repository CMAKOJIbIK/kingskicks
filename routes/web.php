<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RangeController;
use App\Http\Controllers\BrandController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/filter', [HomeController::class, 'filter'])->name('filter');
Route::get('/basket', [HomeController::class, 'basket'])->name('basket');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/range', [RangeController::class, 'range'])->name('range');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/brand', [BrandController::class, 'brand'])->name('brand');
