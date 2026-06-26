
@extends('layout.app')

@section('title', 'Sistema de Gestion Academica')

@section('contenido')
    <div class="welcome-section animate-in">
        <h2>Bienvenidos al Sistema de Gestion Academica</h2>
        <p>Aca podras encontrar toda la informacion sobre los estudiantes, profesores y materias.</p>

        <div class="cards-grid">
            <a href="/estudiantes" class="card animate-in">
                <div class="card-icon">E</div>
                <h3>Estudiantes</h3>
                <p>Consulta y registra los alumnos del sistema.</p>
            </a>

            <a href="/profesores" class="card animate-in">
                <div class="card-icon">P</div>
                <h3>Profesores</h3>
                <p>Gestiona el directorio de profesores.</p>
            </a>

            <a href="/materias" class="card animate-in">
                <div class="card-icon">M</div>
                <h3>Materias</h3>
                <p>Administra las materias y sus creditos.</p>
            </a>
        </div>
    </div>
@endsection