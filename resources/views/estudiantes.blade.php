@extends('layout.app')

@section('title', 'Lista de estudiantes')

@section('contenido')
    <div class="page-header animate-in">
        <div class="page-header-row">
            <div>
                <h2>Estudiantes</h2>
                <p>Listado de alumnos registrados en el sistema</p>
            </div>
            <a href="/estudiantes/crear" class="btn btn-primary">+ Nuevo estudiante</a>
        </div>
    </div>

    <div class="table-container animate-in">
        @if(count($estudiantes) > 0)
            <table>
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
                        <tr class="animate-in">
                            <td>{{ $estudiante->nombre }}</td>
                            <td>{{ $estudiante->apellido }}</td>
                            <td>{{ $estudiante->correo }}</td>
                            <td>{{ $estudiante->programa }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty-state">
                <p>No hay estudiantes registrados aun.</p>
                <a href="/estudiantes/crear" class="btn btn-secondary">Registrar el primero</a>
            </div>
        @endif
    </div>
@endsection