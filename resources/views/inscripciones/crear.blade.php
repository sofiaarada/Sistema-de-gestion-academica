@extends('layout.app')

@section('title', 'Nueva Inscripcion')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Nueva Inscripcion</h4>
            </div>
            <div class="card-body">
                <form action="/inscripciones/guardar" method="POST">
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
                                <option value="{{ $materia->id }}">{{ $materia->nombre }} ({{ $materia->creditos }} creditos)</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="/inscripciones" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
