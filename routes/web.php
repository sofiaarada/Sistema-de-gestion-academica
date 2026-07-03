<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [SistemaController::class, 'inicio']);

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['check.rol:profesor'])->group(function () {
    Route::get('/estudiantes', [SistemaController::class, 'estudiantes']);
    Route::get('/estudiantes/crear', [SistemaController::class, 'crearEstudiante']);
    Route::post('/estudiantes/guardar', [SistemaController::class, 'guardarEstudiante']);

    Route::get('/profesores', [SistemaController::class, 'profesores']);
    Route::get('/profesores/crear', [SistemaController::class, 'crearProfesor']);
    Route::post('/profesores/guardar', [SistemaController::class, 'guardarProfesor']);

    Route::get('/materias', [SistemaController::class, 'materias']);
    Route::get('/materias/crear', [SistemaController::class, 'crearMateria']);
    Route::post('/materias/guardar', [SistemaController::class, 'guardarMateria']);

    Route::get('/inscripciones', [SistemaController::class, 'inscripciones']);
    Route::get('/inscripciones/crear', [SistemaController::class, 'crearInscripcion']);
    Route::post('/inscripciones/guardar', [SistemaController::class, 'guardarInscripcion']);

    Route::get('/notas', [SistemaController::class, 'notas']);
    Route::get('/notas/crear', [SistemaController::class, 'crearNota']);
    Route::post('/notas/guardar', [SistemaController::class, 'guardarNota']);

    Route::get('/asistencias', [SistemaController::class, 'asistencias']);
    Route::get('/asistencias/crear', [SistemaController::class, 'crearAsistencia']);
    Route::post('/asistencias/guardar', [SistemaController::class, 'guardarAsistencia']);

    Route::get('/dashboard/profesor', [DashboardController::class, 'profesor']);
});

Route::middleware(['check.rol:estudiante'])->group(function () {
    Route::get('/dashboard/estudiante', [DashboardController::class, 'estudiante']);
    Route::get('/dashboard/estudiante/notas/{id}', [DashboardController::class, 'notasEstudiante']);
    Route::get('/dashboard/estudiante/matricular', [DashboardController::class, 'matricularForm']);
    Route::post('/dashboard/estudiante/matricular', [DashboardController::class, 'matricularGuardar']);
});
