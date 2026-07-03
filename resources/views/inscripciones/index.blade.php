@extends('layout.app')

@section('title', 'Inscripciones')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <h2 class="mb-0">Inscripciones</h2>
        <p class="text-muted">Estudiantes inscritos en materias</p>
    </div>
    <a href="/inscripciones/crear" class="btn btn-primary">+ Nueva Inscripcion</a>
</div>

<div class="card">
    <div class="card-body">
        @if($inscripciones->count() > 0)
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>Materia</th>
                            <th>Creditos</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inscripciones as $inscripcion)
                            <tr>
                                <td>{{ $inscripcion->estudiante->nombre }} {{ $inscripcion->estudiante->apellido }}</td>
                                <td>{{ $inscripcion->materia->nombre }}</td>
                                <td>{{ $inscripcion->materia->creditos }}</td>
                                <td>{{ $inscripcion->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted mb-0">No hay inscripciones registradas.</p>
        @endif
    </div>
</div>
@endsection
