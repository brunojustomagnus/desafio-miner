<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'check.admin')->group(function () {
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/usuario/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/usuarios/criar', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/usuarios/criar', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::put('/usuario/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/usuario/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
