@extends('layouts.app')

@section('content')

{{-- 
    He adaptado tu nuevo HTML para que funcione dentro de la plantilla Blade. 
    Usará los estilos que pegaste en public/css/style.css.
--}}

<div class="catalogo-container">
    
    <div class="catalogo-header">
        <h2 class="seccion-titulo">Catálogo de Productos</h2>
        <p class="catalogo-subtitulo">
            Productos premium para el cuidado de tu cabello. Disponibles en nuestro salón.
        </p>
    </div>

    <div class="catalogo-grid">

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                {{-- Uso la imagen de tu proyecto anterior --}}
                <img src="{{ asset('imagen/pro1.jpg') }}" alt="Avyna Pozione 10" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Avyna - Pozione 10</h4>
                <p class="producto-descripcion">Tratamiento de capelli 10 en 1. Aceite de Tamanu.</p>
                <div class="producto-tags">
                    <span class="tag">Tratamiento</span>
                    <span class="tag">10 en 1</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro2.jpg') }}" alt="Avyna Finale Ialuronico" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Avyna - Finale Ialuronico</h4>
                <p class="producto-descripcion">Hair Refiller y Rellenador Capilar.</p>
                <div class="producto-tags">
                    <span class="tag">Ácido Hialurónico</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro3.jpg') }}" alt="Veruska Alissant Thermique" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Alissant Thermique</h4>
                <p class="producto-descripcion">Tratamiento thermo-alisante progresivo.</p>
                <div class="producto-tags">
                    <span class="tag">Alisado</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro4.jpg') }}" alt="Veruska Colágeno en Emulsión" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Colágeno en Emulsión</h4>
                <p class="producto-descripcion">Protector-Infusión Pre-Proceso Capilar.</p>
                <div class="producto-tags">
                    <span class="tag">Colágeno</span>
                    <span class="tag">Protector</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro5.jpg') }}" alt="Veruska Bi-Faseta Texturi" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Bi-Faseta Texturi</h4>
                <p class="producto-descripcion">Tratamiento desenredante de alto nivel.</p>
                <div class="producto-tags">
                    <span class="tag">Desenredante</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro6.jpg') }}" alt="Veruska Gel Force Antique" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Gel Force Antique</h4>
                <p class="producto-descripcion">Gel de fijación extrema para peinados.</p>
                <div class="producto-tags">
                    <span class="tag">Fijación</span>
                    <span class="tag">Styling</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro7.jpg') }}" alt="Veruska Clinique Treatment" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Clinique Treatment</h4>
                <p class="producto-descripcion">Regenerador intensivo para cabello sobreprocesado.</p>
                <div class="producto-tags">
                    <span class="tag">Regenerador</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro8.jpg') }}" alt="Veruska Dual Color Mask" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Dual Color Mask</h4>
                <p class="producto-descripcion">Mascarilla Matiz. Neutraliza visos amarillos.</p>
                <div class="producto-tags">
                    <span class="tag">Matizante</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro9.jpg') }}" alt="Veruska Fresh Curls & Liss" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Fresh Curls & Liss</h4>
                <p class="producto-descripcion">Cabello liso y brillante @stilize.</p>
                <div class="producto-tags">
                    <span class="tag">Brillo</span>
                </div>
            </div>
        </div>

        <div class="producto-card">
            <div class="producto-imagen-wrapper">
                <img src="{{ asset('imagen/pro10.jpg') }}" alt="Veruska Equinua Hiding Cream" class="producto-imagen">
                <div class="producto-overlay">
                    <span class="ver-mas">Ver detalles</span>
                </div>
            </div>
            <div class="producto-info">
                <h4 class="producto-titulo">Veruska - Equinua Hiding Cream</h4>
                <p class="producto-descripcion">Suero estabilizado para uso con herramientas.</p>
                <div class="producto-tags">
                    <span class="tag">Protector térmico</span>
                </div>
            </div>
        </div>

    </div> </div> @endsection