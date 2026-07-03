@extends('layout.app')

@section('title', 'Notas')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <h2 class="mb-0">Notas</h2>
        <p class="text-muted">Calificaciones de estudiantes</p>
    </div>
    <a href="/notas/crear" class="btn btn-primary">+ Nueva Nota</a>
</div>

<div class="card">
    <div class="card-body">
        @if($notas->count() > 0)
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>Materia</th>
                            <th>Tipo</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notas as $nota)
                            <tr>
                                <td>{{ $nota->inscripcion->estudiante->nombre }} {{ $nota->inscripcion->estudiante->apellido }}</td>
                                <td>{{ $nota->inscripcion->materia->nombre }}</td>
                                <td>{{ ucfirst($nota->tipo) }}</td>
                                <td><span class="badge bg-{{ $nota->nota >= 3 ? 'success' : 'danger' }}">{{ $nota->nota }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-muted mb-0">No hay notas registradas.</p>
        @endif
    </div>
</div>
@endsection
