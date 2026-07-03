@extends('layout.app')

@section('title', 'Dashboard Estudiante')

@section('contenido')
<div class="row mb-4">
    <div class="col-12">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h2 class="card-title">Bienvenido, {{ $estudiante->nombre }} {{ $estudiante->apellido }}</h2>
                <p class="card-text mb-0">{{ $estudiante->programa }} | {{ $estudiante->correo }}</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Mis Materias Inscritas</h5>
                <a href="/dashboard/estudiante/matricular" class="btn btn-light btn-sm text-primary fw-bold">+ Matricular Materia</a>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success m-3 mb-0">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card-body">
                @if($inscripciones->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Materia</th>
                                    <th>Creditos</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inscripciones as $inscripcion)
                                    <tr>
                                        <td>{{ $inscripcion->materia->nombre }}</td>
                                        <td>{{ $inscripcion->materia->creditos }}</td>
                                        <td>
                                            <a href="/dashboard/estudiante/notas/{{ $inscripcion->id }}" class="btn btn-sm btn-info">Ver Notas</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted mb-0">No estas inscrito en ninguna materia aun.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Asistencias</h5>
            </div>
            <div class="card-body">
                @if($asistencias->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Materia</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($asistencias as $asistencia)
                                    <tr>
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
                    <p class="text-muted mb-0">No hay registros de asistencia.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
