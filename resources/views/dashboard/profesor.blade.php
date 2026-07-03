@extends('layout.app')

@section('title', 'Dashboard Profesor')

@section('contenido')
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h2 class="card-title">Bienvenido, {{ $profesor->nombre }} {{ $profesor->apellido }}</h2>
                <p class="card-text mb-0">{{ $profesor->correo }}</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <h5 class="card-title">Estudiantes</h5>
                <p class="card-text">Gestionar los estudiantes del sistema</p>
                <a href="/estudiantes" class="btn btn-primary">Ir a Estudiantes</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <h5 class="card-title">Materias</h5>
                <p class="card-text">Administrar las materias disponibles</p>
                <a href="/materias" class="btn btn-primary">Ir a Materias</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center h-100">
            <div class="card-body">
                <h5 class="card-title">Inscripciones</h5>
                <p class="card-text">Inscribir estudiantes en materias</p>
                <a href="/inscripciones" class="btn btn-primary">Ir a Inscripciones</a>
            </div>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="card text-center h-100">
            <div class="card-body">
                <h5 class="card-title">Notas</h5>
                <p class="card-text">Registrar calificaciones de estudiantes</p>
                <a href="/notas" class="btn btn-warning">Ir a Notas</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card text-center h-100">
            <div class="card-body">
                <h5 class="card-title">Asistencias</h5>
                <p class="card-text">Controlar la asistencia a clases</p>
                <a href="/asistencias" class="btn btn-info text-white">Ir a Asistencias</a>
            </div>
        </div>
    </div>
</div>
@endsection
