@extends('layout.app')

@section('title', 'Crear Materia')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
                <h2 class="mb-0">Registrar Materia</h2>
                <p class="text-muted mb-0">Completa los datos de la nueva materia</p>
            </div>
            <a href="/materias" class="btn btn-secondary">Volver al listado</a>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="/materias/guardar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Programacion Web" required>
                    </div>

                    <div class="mb-3">
                        <label for="creditos" class="form-label">Creditos</label>
                        <input type="number" class="form-control" id="creditos" name="creditos" placeholder="Ej: 3" min="1" max="10" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Guardar materia</button>
                        <a href="/materias" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
