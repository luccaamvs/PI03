<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/create', [CategoryController::class, 'store']);