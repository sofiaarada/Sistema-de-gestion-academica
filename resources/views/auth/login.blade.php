@extends('layout.app')

@section('title', 'Iniciar Sesion')

@section('contenido')
<div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">Iniciar Sesion</h4>
            </div>
            <div class="card-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contrasena</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo de Usuario</label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol" id="rolEstudiante" value="estudiante" checked>
                                <label class="form-check-label" for="rolEstudiante">Estudiante</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol" id="rolProfesor" value="profesor">
                                <label class="form-check-label" for="rolProfesor">Profesor</label>
                            </div>
                        </div>
                    </div>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <button type="submit" class="btn btn-success w-100">Ingresar</button>
                </form>
                <p class="text-center mt-3 mb-0">
                    ¿No tienes cuenta? <a href="/register">Registrate aqui</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
