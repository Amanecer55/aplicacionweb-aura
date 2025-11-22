<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rutas para mostrar las páginas
Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/servicios', [PageController::class, 'servicios'])->name('servicios');

// --- RUTA AÑADIDA PARA EL CATÁLOGO ---
Route::get('/catalogo', [PageController::class, 'catalogo'])->name('catalogo');
// --- FIN DE LA RUTA AÑADIDA ---

Route::get('/nosotros', [PageController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/reservaciones', [PageController::class, 'reservaciones'])->name('reservaciones');

// Ruta para procesar el formulario (POST)
Route::post('/reservar', [PageController::class, 'storeReserva'])->name('reserva.store');