@extends('layout.app')

@section('title', 'Nueva Asistencia')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Registrar Asistencia</h4>
            </div>
            <div class="card-body">
                <form action="/asistencias/guardar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="estudiante_id" class="form-label">Estudiante</label>
                        <select class="form-select" id="estudiante_id" name="estudiante_id" required>
                            <option value="">Seleccione un estudiante</option>
                            @foreach($estudiantes as $estudiante)
                                <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }} - {{ $estudiante->programa }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="materia_id" class="form-label">Materia</label>
                        <select class="form-select" id="materia_id" name="materia_id" required>
                            <option value="">Seleccione una materia</option>
                            @foreach($materias as $materia)
                                <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ date('Y-m-d') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Estado</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="presente" name="presente" value="1" checked>
                            <label class="form-check-label" for="presente">Presente</label>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="/asistencias" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
