<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']
    
);
route::resource('products', ProductController::class);
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');