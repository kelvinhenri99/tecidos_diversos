<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products-get/{id}', [ProductController::class, 'getProduct'])->name('getProduct');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])->name('store');
Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::post('/products/update', [ProductController::class, 'update'])->name('update');
