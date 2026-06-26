
@extends('layout.app')

@section('title', 'Crear Materia')

@section('contenido')
    <div class="page-header animate-in">
        <div class="page-header-row">
            <div>
                <h2>Registrar Materia</h2>
                <p>Completa los datos de la nueva materia</p>
            </div>
            <a href="/materias" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>

    <div class="form-card animate-in">
        <form action="/materias/guardar" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Programacion Web" required>
            </div>

            <div class="form-group">
                <label for="creditos">Creditos</label>
                <input type="number" id="creditos" name="creditos" placeholder="Ej: 3" min="1" max="10" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Guardar materia</button>
                <a href="/materias" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection