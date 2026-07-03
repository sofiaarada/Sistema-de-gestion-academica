@extends('layout.app')

@section('title', 'Matricular Materia')

@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
                <h2 class="mb-0">Matricular Materia</h2>
                <p class="text-muted mb-0">Selecciona una materia disponible para inscribirte</p>
            </div>
            <a href="/dashboard/estudiante" class="btn btn-secondary">Volver al Dashboard</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                @if($materiasDisponibles->count() > 0)
                    <form action="/dashboard/estudiante/matricular" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="materia_id" class="form-label fw-bold">Materias Disponibles</label>
                            <select name="materia_id" id="materia_id" class="form-select form-select-lg" required>
                                <option value="" disabled selected>-- Elige una materia --</option>
                                @foreach($materiasDisponibles as $materia)
                                    <option value="{{ $materia->id }}">{{ $materia->nombre }} ({{ $materia->creditos }} Créditos)</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-2 fw-bold">Confirmar Matrícula</button>
                    </form>
                @else
                    <div class="text-center py-4">
                        <h5 class="text-muted">¡Felicidades!</h5>
                        <p class="mb-0">Ya estás inscrito en todas las materias disponibles o actualmente no hay materias registradas en el sistema.</p>
                        <a href="/dashboard/estudiante" class="btn btn-primary mt-3">Regresar a Mis Materias</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
