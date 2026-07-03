@extends('layout.app')

@section('title', 'Sistema de Gestion Academica')

@section('contenido')
<div class="row mb-4">
    <div class="col-12 text-center">
        <div class="p-4 bg-light rounded shadow-sm">
            <h2 class="fw-bold">Bienvenidos al Sistema de Gestion Academica</h2>
            <p class="lead text-muted">Aca podras encontrar toda la informacion sobre los estudiantes, profesores y materias.</p>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <div id="carouselExampleIndicators" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/sena1.jpg" class="d-block w-100" alt="imagen chicos sena">
                </div>
                <div class="carousel-item">
                    <img src="/img/sena2.jpg" class="d-block w-100" alt="sena tic">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center p-4">
                <div class="mb-3 text-success">
                    <svg width="40" height="40" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                    </svg>
                </div>
                <h5 class="card-title fw-bold">Tecnología TIC</h5>
                <p class="card-text text-muted">Formamos talento humano integral con énfasis en el área de Tecnologías de la Información y las Comunicaciones (TIC).</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center p-4">
                <div class="mb-3 text-success">
                    <svg width="40" height="40" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                    </svg>
                </div>
                <h5 class="card-title fw-bold">Comunidad Educativa</h5>
                <p class="card-text text-muted">Facilitamos la gestión de estudiantes, profesores y materias mediante herramientas modernas e intuitivas.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
            <div class="card-body text-center p-4">
                <div class="mb-3 text-success">
                    <svg width="40" height="40" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                        <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                    </svg>
                </div>
                <h5 class="card-title fw-bold">Calidad SENA</h5>
                <p class="card-text text-muted">Invertimos en el desarrollo técnico de los trabajadores ofreciendo y ejecutando la formación profesional integral gratuita.</p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4 mb-5">
    <div class="col-12">
        <div class="bg-success text-white p-5 rounded shadow text-center">
            <h3 class="fw-bold mb-3">¿Qué es el SENA?</h3>
            <p class="lead mb-0">El Servicio Nacional de Aprendizaje (SENA) es un establecimiento público del orden nacional, con autonomía administrativa, adscrito al Ministerio del Trabajo de Colombia. Su principal objetivo es brindar formación técnica y tecnológica integral a millones de colombianos, impulsando el desarrollo social, económico y tecnológico del país, con especial enfoque en herramientas TIC modernas.</p>
        </div>
    </div>
</div>
@endsection
