<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;

Route::get('/', [SistemaController::class, 'inicio']);

Route::get('/estudiantes', [SistemaController::class, 'estudiantes']);

Route::get('/profesores', [SistemaController::class, 'profesores']);

Route::get('/materias', [SistemaController::class, 'materias']);


Route::get('/estudiantes/crear', [SistemaController::class, 'crearEstudiante']);

Route::post('/estudiantes/guardar', [SistemaController::class, 'guardarEstudiante']);


Route::get('/materias/crear', [SistemaController::class, 'crearMateria']);

Route::post('/materias/guardar', [SistemaController::class, 'guardarMateria']);


Route::get('/profesores/crear', [SistemaController::class, 'crearProfesor']);

Route::post('/profesores/guardar', [SistemaController::class, 'guardarProfesor']);
