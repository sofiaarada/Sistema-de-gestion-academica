@extends('layout.app')

@section('title', 'Lista de profesores')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <h2 class="mb-0">Profesores</h2>
        <p class="text-muted mb-0">Directorio de profesores del sistema</p>
    </div>
    <a href="/profesores/crear" class="btn btn-primary">+ Nuevo profesor</a>
</div>

<div class="card">
    <div class="card-body">
        @if(count($profesores) > 0)
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($profesores as $profesor)
                            <tr>
                                <td>{{ $profesor->nombre }}</td>
                                <td>{{ $profesor->apellido }}</td>
                                <td>{{ $profesor->correo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-4">
                <p class="text-muted">No hay profesores registrados aun.</p>
                <a href="/profesores/crear" class="btn btn-secondary">Registrar el primero</a>
            </div>
        @endif
    </div>
</div>
@endsection
