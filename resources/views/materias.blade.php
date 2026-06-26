@extends('layout.app')

@section('title', 'Lista de materias')

@section('contenido')
    <div class="page-header animate-in">
        <div class="page-header-row">
            <div>
                <h2>Materias</h2>
                <p>Materias disponibles en el sistema</p>
            </div>
            <a href="/materias/crear" class="btn btn-primary">+ Nueva materia</a>
        </div>
    </div>

    <div class="table-container animate-in">
        @if(count($materias) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Creditos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $materia)
                        <tr class="animate-in">
                            <td>{{ $materia->nombre }}</td>
                            <td><span class="badge">{{ $materia->creditos }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty-state">
                <p>No hay materias registradas aun.</p>
                <a href="/materias/crear" class="btn btn-secondary">Registrar la primera</a>
            </div>
        @endif
    </div>
@endsection