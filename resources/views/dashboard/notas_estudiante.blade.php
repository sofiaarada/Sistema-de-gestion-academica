@extends('layout.app')

@section('title', 'Mis Notas')

@section('contenido')
<div class="mb-3">
    <a href="/dashboard/estudiante" class="btn btn-secondary">&larr; Volver al Dashboard</a>
</div>

<div class="card">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Notas - {{ $inscripcion->materia->nombre }}</h4>
    </div>
    <div class="card-body">
        <p><strong>Estudiante:</strong> {{ $inscripcion->estudiante->nombre }} {{ $inscripcion->estudiante->apellido }}</p>
        <p><strong>Programa:</strong> {{ $inscripcion->estudiante->programa }}</p>

        @if($inscripcion->notas->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Nota</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inscripcion->notas as $nota)
                            <tr>
                                <td>{{ ucfirst($nota->tipo) }}</td>
                                <td>{{ $nota->nota }}</td>
                                <td>
                                    @if($nota->nota >= 3)
                                        <span class="badge bg-success">Aprobado</span>
                                    @else
                                        <span class="badge bg-danger">Reprobado</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="table-info">
                            <th>Promedio</th>
                            <th>{{ number_format($inscripcion->notas->avg('nota'), 2) }}</th>
                            <th>
                                @if($inscripcion->notas->avg('nota') >= 3)
                                    <span class="badge bg-success">Aprobado</span>
                                @else
                                    <span class="badge bg-danger">Reprobado</span>
                                @endif
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        @else
            <p class="text-muted mb-0">No hay notas registradas para esta materia.</p>
        @endif
    </div>
</div>
@endsection
