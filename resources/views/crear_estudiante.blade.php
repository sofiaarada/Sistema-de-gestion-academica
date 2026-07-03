@extends('layout.app')

@section('title', 'Crear Estudiante')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
                <h2 class="mb-0">Registrar Estudiante</h2>
                <p class="text-muted mb-0">Completa los datos del nuevo estudiante</p>
            </div>
            <a href="/estudiantes" class="btn btn-secondary">Volver al listado</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/estudiantes/guardar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej: Perez" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ej: juan@correo.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="programa" class="form-label">Programa</label>
                        <input type="text" class="form-control" id="programa" name="programa" placeholder="Ej: Ingenieria de Sistemas" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contrasena</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Guardar estudiante</button>
                        <a href="/estudiantes" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
