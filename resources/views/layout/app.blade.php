<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Gestion Academica')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
    <header class="sticky-top shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success py-3">
            <div class="container">
                <a class="navbar-brand fw-bold fs-4" href="/">Sistema Académico SENA TIC</a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}" href="/">Inicio</a>
                        </li>
                        @if(Auth::guard('profesor')->check())
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('dashboard/profesor') ? 'active fw-bold' : '' }}" href="/dashboard/profesor">Dashboard</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->is('estudiantes*') ? 'active fw-bold' : '' }}" href="#" role="button" data-bs-toggle="dropdown">Estudiantes</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="/estudiantes">Ver Estudiantes</a></li>
                                    <li><a class="dropdown-item" href="/estudiantes/crear">Crear Estudiante</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->is('profesores*') ? 'active fw-bold' : '' }}" href="#" role="button" data-bs-toggle="dropdown">Profesores</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="/profesores">Ver Profesores</a></li>
                                    <li><a class="dropdown-item" href="/profesores/crear">Crear Profesor</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ request()->is('materias*') || request()->is('inscripciones*') || request()->is('notas*') || request()->is('asistencias*') ? 'active fw-bold' : '' }}" href="#" role="button" data-bs-toggle="dropdown">Académico</a>
                                <ul class="dropdown-menu shadow">
                                    <li><a class="dropdown-item" href="/materias">Materias</a></li>
                                    <li><a class="dropdown-item" href="/materias/crear">Crear Materia</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/inscripciones">Inscripciones</a></li>
                                    <li><a class="dropdown-item" href="/notas">Notas</a></li>
                                    <li><a class="dropdown-item" href="/asistencias">Asistencias</a></li>
                                </ul>
                            </li>
                        @endif
                        @if(Auth::guard('estudiante')->check())
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('dashboard/estudiante') ? 'active fw-bold' : '' }}" href="/dashboard/estudiante">Mi Dashboard</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @if(Auth::guard('profesor')->check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="bg-light text-success rounded-circle d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; font-weight: bold;">
                                        {{ substr(Auth::guard('profesor')->user()->nombre, 0, 1) }}
                                    </div>
                                    {{ Auth::guard('profesor')->user()->nombre }} {{ Auth::guard('profesor')->user()->apellido }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow">
                                    <li><a class="dropdown-item" href="/dashboard/profesor">Mi Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="/logout">Cerrar Sesion</a></li>
                                </ul>
                            </li>
                        @elseif(Auth::guard('estudiante')->check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
                                    <div class="bg-light text-success rounded-circle d-flex justify-content-center align-items-center" style="width: 30px; height: 30px; font-weight: bold;">
                                        {{ substr(Auth::guard('estudiante')->user()->nombre, 0, 1) }}
                                    </div>
                                    {{ Auth::guard('estudiante')->user()->nombre }} {{ Auth::guard('estudiante')->user()->apellido }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow">
                                    <li><a class="dropdown-item" href="/dashboard/estudiante">Mi Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="/logout">Cerrar Sesion</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item me-2">
                                <a class="nav-link text-white btn btn-outline-light px-3 mb-2 mb-lg-0" href="/register">Registrarse</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link text-white btn btn-outline-light px-3 mb-2 mb-lg-0" href="/login">Ingresar</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-4">
        @yield('contenido')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">Sistema de gestion academica 2026 &copy; Hilda Rada</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
