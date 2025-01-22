<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

// Página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');
// Páginade detalle del disco
Route::get('/record/{record}', [HomeController::class, 'recordDetails']);

// Ruta para obtener discos con paginación
Route::get('/api/records/{page}', [RecordController::class, 'showRecords']);
// Ruta para obtener un disco específico por ID
Route::get('/api/record/{id}', [RecordController::class, 'showRecord']);
// Ruta para obtener discos por género y paginación
Route::get('/api/genre/{id}/{page}', [RecordController::class, 'getByGenre']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Las rutas generadas por Breeze para el login y registro
require __DIR__.'/auth.php';
