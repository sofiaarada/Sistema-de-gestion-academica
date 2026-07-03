@extends('layout.app')

@section('title', 'Crear Profesor')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
                <h2 class="mb-0">Registrar Profesor</h2>
                <p class="text-muted mb-0">Completa los datos del nuevo profesor</p>
            </div>
            <a href="/profesores" class="btn btn-secondary">Volver al listado</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/profesores/guardar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Maria" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej: Garcia" required>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ej: maria@universidad.edu" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contrasena</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Guardar profesor</button>
                        <a href="/profesores" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
