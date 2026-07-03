@extends('layout.app')

@section('title', 'Asistencias')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <h2 class="mb-0">Asistencias</h2>
        <p class="text-muted">Control de asistencia a clases</p>
    </div>
    <a href="/asistencias/crear" class="btn btn-primary">+ Nueva Asistencia</a>
</div>

<div class="card">
    <div class="card-body">
        @if($asistencias->count() > 0)
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>Materia</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($asistencias as $asistencia)
                            <tr>
                                <td>{{ $asistencia->estudiante->nombre }} {{ $asistencia->estudiante->apellido }}</td>
                                <td>{{ $asistencia->materia->nombre }}</td>
                                <td>{{ $asistencia->fecha }}</td>
                                <td>
                                    @if($asistencia->presente)
                                        <span class="badge bg-success">Presente</span>
                                    @else
                                        <span class="badge bg-danger">Ausente</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted mb-0">No hay asistencias registradas.</p>
        @endif
    </div>
</div>
@endsection
