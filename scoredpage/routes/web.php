<?php

use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ModelViewController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('index');
});

// Dashboard (requiere autenticación y verificación)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grupo de rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas estáticas
Route::view('/about', 'about');
Route::view('/appointment', 'appointment');
Route::view('/contact', 'contact');
Route::view('/opening', 'opening');
Route::view('/price', 'price');
Route::view('/team', 'team');
Route::view('/testimonial', 'testimonial');

// Rutas para la gestión de modelos (CRUD)
Route::resource('models', ModelsController::class)->except(['show']);


// Rutas para la vista de modelos accesible para clientes
#Route::get('/models', [ModelViewController::class, 'index'])->name('models.index');
#Route::get('/models/{id}', [ModelViewController::class, 'show'])->name('models.show');

// Archivo de autenticación
require __DIR__.'/auth.php';