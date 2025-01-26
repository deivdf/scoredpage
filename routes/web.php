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

#Rutas estaticas
Route::get('/about', function () {
    return view('about');
});

Route::get('/appointment', function () {
    return view('appointment');
});
Route::resource('models', ModelsController::class);
Route::get('/models/create', [ModelsController::class, 'index'])->name('models.create');
Route::post('/models', [ModelsController::class, 'store'])->name('models.store');
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/opening', function () {
    return view('opening');
});

Route::get('/price', function () {
    return view('price');
});


Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

require __DIR__.'/auth.php';
