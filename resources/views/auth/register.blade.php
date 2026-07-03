@extends('layout.app')

@section('title', 'Registrarse')

@section('contenido')
<div class="row justify-content-center mt-4">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow">
            <div class="card-header bg-success text-white text-center">
                <h4 class="mb-0">Crear Cuenta</h4>
            </div>
            <div class="card-body">
                <form action="/register" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido') }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">Contrasena</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password_confirmation" class="form-label">Confirmar Contrasena</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipo de Usuario</label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol" id="rolEstudiante" value="estudiante" {{ old('rol', 'estudiante') === 'estudiante' ? 'checked' : '' }}>
                                <label class="form-check-label" for="rolEstudiante">Estudiante</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rol" id="rolProfesor" value="profesor" {{ old('rol') === 'profesor' ? 'checked' : '' }}>
                                <label class="form-check-label" for="rolProfesor">Profesor</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3" id="programaField">
                        <label for="programa" class="form-label">Programa</label>
                        <input type="text" class="form-control" id="programa" name="programa" value="{{ old('programa') }}" placeholder="Ej: Ingenieria de Sistemas">
                    </div>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <button type="submit" class="btn btn-success w-100">Crear Cuenta</button>
                </form>
                <p class="text-center mt-3 mb-0">
                    ¿Ya tienes cuenta? <a href="/login">Inicia sesion</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('input[name="rol"]').forEach(input => {
        input.addEventListener('change', function() {
            document.getElementById('programaField').style.display =
                this.value === 'estudiante' ? 'block' : 'none';
            document.getElementById('programa').required = this.value === 'estudiante';
        });
    });
    document.querySelector('input[name="rol"]:checked').dispatchEvent(new Event('change'));
</script>
@endsection
