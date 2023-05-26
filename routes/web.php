<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/products/index', [ProductController::class, 'index'])->name('index');
Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('show');
Route::get('/products/create', [ProductController::class, 'create'])->name('create');

Route::post('/products/store', [ProductController::class, 'store'])->name('store');
Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('delete');
Route::post('/products/update', [ProductController::class, 'update'])->name('update');
