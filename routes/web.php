<?php

use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('models', ModelsController::class);

# Rutas estáticas
Route::view('/about', 'about');
Route::view('/appointment', 'appointment');
Route::view('/contact', 'contact');
Route::view('/opening', 'opening');
Route::view('/price', 'price');
Route::view('/service', 'service');
Route::view('/team', 'team');
Route::view('/testimonial', 'testimonial');

require __DIR__.'/auth.php';
