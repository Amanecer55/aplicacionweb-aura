@extends('layouts.app')

@section('content')

{{-- 
    Este es el código HTML de tu catálogo.
    He cambiado las rutas de las imágenes (proX.jpg)
    para que usen las imágenes que sí tienes (spaX.jpg, spa_uñas_rojas.jpg, etc.)
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
                {{-- CAMBIO: 'pro1.jpg' por 'spa1.jpg' --}}
                <img src="{{ asset('imagen/spa1.jpg') }}" alt="Producto de spa" class="producto-imagen">
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
                {{-- CAMBIO: 'pro2.jpg' por 'spa2.jpg' --}}
                <img src="{{ asset('imagen/spa2.jpg') }}" alt="Producto de spa" class="producto-imagen">
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
                {{-- CAMBIO: 'pro3.jpg' por 'spa_cama_lacer.jpg' --}}
                <img src="{{ asset('imagen/spa_cama_lacer.jpg') }}" alt="Tratamiento" class="producto-imagen">
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
                {{-- CAMBIO: 'pro4.jpg' por 'spa_lacer_verde.jpg' --}}
                <img src="{{ asset('imagen/spa_lacer_verde.jpg') }}" alt="Tratamiento láser" class="producto-imagen">
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
                {{-- CAMBIO: 'pro5.jpg' por 'spa_risos.jpg' --}}
                <img src="{{ asset('imagen/spa_risos.jpg') }}" alt="Cabello rizado" class="producto-imagen">
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
                {{-- CAMBIO: 'pro6.jpg' por 'spa_risos_corona.jpg' --}}
                <img src="{{ asset('imagen/spa_risos_corona.jpg') }}" alt="Peinado" class="producto-imagen">
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
                {{-- CAMBIO: 'pro7.jpg' por 'spa_uñas_aura.jpg' --}}
                <img src="{{ asset('imagen/spa_uñas_aura.jpg') }}" alt="Manicura" class="producto-imagen">
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
                {{-- CAMBIO: 'pro8.jpg' por 'spa_uñas_rojas.jpg' --}}
                <img src="{{ asset('imagen/spa_uñas_rojas.jpg') }}" alt="Uñas rojas" class="producto-imagen">
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
                {{-- CAMBIO: 'pro9.jpg' por 'spa_reseña.jpg' --}}
                <img src="{{ asset('imagen/spa_reseña.jpg') }}" alt="Reseña de spa" class="producto-imagen">
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
                {{-- CAMBIO: 'pro10.jpg' por 'spa_fondo_trabajo.jpg' --}}
                <img src="{{ asset('imagen/spa_fondo_trabajo.jpg') }}" alt="Equipo de spa" class="producto-imagen">
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