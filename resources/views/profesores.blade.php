@extends('layout.app')

@section('title', 'Lista de profesores')

@section('contenido')
    <div class="page-header animate-in">
        <div class="page-header-row">
            <div>
                <h2>Profesores</h2>
                <p>Directorio de profesores del sistema</p>
            </div>
            <a href="/profesores/crear" class="btn btn-primary">+ Nuevo profesor</a>
        </div>
    </div>

    <div class="table-container animate-in">
        @if(count($profesores) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profesores as $profesor)
                        <tr class="animate-in">
                            <td>{{ $profesor->nombre }}</td>
                            <td>{{ $profesor->apellido }}</td>
                            <td>{{ $profesor->correo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty-state">
                <p>No hay profesores registrados aun.</p>
                <a href="/profesores/crear" class="btn btn-secondary">Registrar el primero</a>
            </div>
        @endif
    </div>
@endsection