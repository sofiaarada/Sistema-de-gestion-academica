<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Gestion Academica')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
    <header>
        <div class="header-inner">
            <h1>Sistema <span>Academico</span></h1>
            <nav id="main-nav">
                <a href="/">Inicio</a>
                <a href="/estudiantes">Estudiantes</a>
                <a href="/profesores">Profesores</a>
                <a href="/materias">Materias</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>Sistema de gestion academica 2026 &copy; Hilda Rada</footer>

    <script src="/js/app.js"></script>
</body>
</html>