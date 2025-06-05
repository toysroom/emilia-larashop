<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function() {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group( function() {
    
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');
    

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});

require __DIR__.'/auth.php';
