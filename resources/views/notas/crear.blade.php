@extends('layout.app')

@section('title', 'Nueva Nota')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Registrar Nota</h4>
            </div>
            <div class="card-body">
                <form action="/notas/guardar" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inscripcion_id" class="form-label">Estudiante - Materia</label>
                        <select class="form-select" id="inscripcion_id" name="inscripcion_id" required>
                            <option value="">Seleccione una inscripcion</option>
                            @foreach($inscripciones as $inscripcion)
                                <option value="{{ $inscripcion->id }}">{{ $inscripcion->estudiante->nombre }} {{ $inscripcion->estudiante->apellido }} - {{ $inscripcion->materia->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo de Nota</label>
                        <select class="form-select" id="tipo" name="tipo" required>
                            <option value="">Seleccione el tipo</option>
                            <option value="parcial1">Parcial 1</option>
                            <option value="parcial2">Parcial 2</option>
                            <option value="final">Final</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nota" class="form-label">Calificacion (0.0 - 5.0)</label>
                        <input type="number" class="form-control" id="nota" name="nota" step="0.1" min="0" max="5" placeholder="Ej: 4.5" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="/notas" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
