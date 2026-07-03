@extends('layout.app')

@section('title', 'Lista de materias')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <h2 class="mb-0">Materias</h2>
        <p class="text-muted mb-0">Materias disponibles en el sistema</p>
    </div>
    <a href="/materias/crear" class="btn btn-primary">+ Nueva materia</a>
</div>

<div class="card">
    <div class="card-body">
        @if(count($materias) > 0)
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Creditos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($materias as $materia)
                            <tr>
                                <td>{{ $materia->nombre }}</td>
                                <td><span class="badge bg-primary">{{ $materia->creditos }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-4">
                <p class="text-muted">No hay materias registradas aun.</p>
                <a href="/materias/crear" class="btn btn-secondary">Registrar la primera</a>
            </div>
        @endif
    </div>
</div>
@endsection
