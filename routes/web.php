<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'check.admin'])->group(function () {
    Route::resource('users', UserController::class); // Uso da tecnologia 'resource' para clean code em CRUD simples.
    Route::resource('product-category', ProductCategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);
    
});
// Rotas acessíveis apenas para o gerente
Route::middleware(['auth', 'check.gerente'])->group(function () {
    Route::resource('product-category', ProductCategoryController::class)->only(['index', 'create', 'store', 'show', 'update']);
    Route::resource('brand', BrandController::class)->only(['index', 'create', 'store', 'show', 'update']);
    Route::resource('product', ProductController::class)->only(['index', 'create', 'store', 'show', 'update']);
});
Route::middleware(['auth', 'check.comum'])->group(function () {
    Route::get('product', [ProductController::class, 'index'])->name('product.index');
});

require __DIR__.'/auth.php';
