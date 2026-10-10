<?php

use App\Http\Controllers\ProyectoController;

// Redirigir la raíz directamente al índice de proyectos
Route::get('/', [ProyectoController::class, 'index']);

// Rutas de tipo recurso para el CRUD
Route::resource('proyectos', ProyectoController::class);