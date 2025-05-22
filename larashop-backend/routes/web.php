<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function() {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group( function() {
    
    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::view('profile', 'profile')
        ->name('profile');
    

    Route::resource('categories', CategoryController::class);

});



require __DIR__.'/auth.php';
