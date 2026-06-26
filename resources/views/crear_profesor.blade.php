
@extends('layout.app')

@section('title', 'Crear Profesor')

@section('contenido')
    <div class="page-header animate-in">
        <div class="page-header-row">
            <div>
                <h2>Registrar Profesor</h2>
                <p>Completa los datos del nuevo profesor</p>
            </div>
            <a href="/profesores" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>

    <div class="form-card animate-in">
        <form action="/profesores/guardar" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Maria" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ej: Garcia" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="Ej: maria@universidad.edu" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Guardar profesor</button>
                <a href="/profesores" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection