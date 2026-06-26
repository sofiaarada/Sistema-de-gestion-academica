
@extends('layout.app')

@section('title', 'Crear Estudiante')

@section('contenido')
    <div class="page-header animate-in">
        <div class="page-header-row">
            <div>
                <h2>Registrar Estudiante</h2>
                <p>Completa los datos del nuevo estudiante</p>
            </div>
            <a href="/estudiantes" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>

    <div class="form-card animate-in">
        <form action="/estudiantes/guardar" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ej: Perez" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="Ej: juan@correo.com" required>
            </div>

            <div class="form-group">
                <label for="programa">Programa</label>
                <input type="text" id="programa" name="programa" placeholder="Ej: Ingenieria de Sistemas" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Guardar estudiante</button>
                <a href="/estudiantes" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
