@extends('layout.app')

@section('title', 'Lista de estudiantes')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <h2 class="mb-0">Estudiantes</h2>
        <p class="text-muted mb-0">Listado de alumnos registrados en el sistema</p>
    </div>
    <a href="/estudiantes/crear" class="btn btn-primary">+ Nuevo estudiante</a>
</div>

<div class="card">
    <div class="card-body">
        @if(count($estudiantes) > 0)
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Programa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estudiantes as $estudiante)
                            <tr>
                                <td>{{ $estudiante->nombre }}</td>
                                <td>{{ $estudiante->apellido }}</td>
                                <td>{{ $estudiante->correo }}</td>
                                <td>{{ $estudiante->programa }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-4">
                <p class="text-muted">No hay estudiantes registrados aun.</p>
                <a href="/estudiantes/crear" class="btn btn-secondary">Registrar el primero</a>
            </div>
        @endif
    </div>
</div>
@endsection
