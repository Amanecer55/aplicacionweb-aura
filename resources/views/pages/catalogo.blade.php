@extends('layouts.app')

@section('content')

<h2 class="seccion-titulo">Catálogo de Productos</h2>
<p class="catalogo-subtitulo">
    Productos premium para el cuidado de tu cabello. Disponibles en nuestro salón.
</p>

<div class="catalogo-grid">

    <!-- Producto 1 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro1.jpg') }}" alt="Avyna Pozione 10">
        </div>
        <div class="producto-info">
            <h4>Avyna - Pozione 10</h4>
            <p>Tratamiento de capelli 10 en 1. Aceite de Tamanu.</p>
        </div>
    </div>

    <!-- Producto 2 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro2.jpg') }}" alt="Avyna Finale Ialuronico">
        </div>
        <div class="producto-info">
            <h4>Avyna - Finale Ialuronico</h4>
            <p>Hair Refiller y Rellenador Capilar.</p>
        </div>
    </div>

    <!-- Producto 3 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro3.jpg') }}" alt="Veruska Alissant Thermique">
        </div>
        <div class="producto-info">
            <h4>Veruska - Alissant Thermique</h4>
            <p>Tratamiento thermo-alisante progresivo.</p>
        </div>
    </div>

    <!-- Producto 4 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro4.jpg') }}" alt="Veruska Colágeno en Emulsión">
        </div>
        <div class="producto-info">
            <h4>Veruska - Colágeno en Emulsión</h4>
            <p>Protector-Infusión Pre-Proceso Capilar.</p>
        </div>
    </div>

    <!-- Producto 5 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro5.jpg') }}" alt="Veruska Bi-Faseta Texturi">
        </div>
        <div class="producto-info">
            <h4>Veruska - Bi-Faseta Texturi</h4>
            <p>Tratamiento desenredante de alto nivel.</p>
        </div>
    </div>

    <!-- Producto 6 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro6.jpg') }}" alt="Veruska Gel Force Antique">
        </div>
        <div class="producto-info">
            <h4>Veruska - Gel Force Antique</h4>
            <p>Gel de fijación extrema para peinados.</p>
        </div>
    </div>

    <!-- Producto 7 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro7.jpg') }}" alt="Veruska Clinique Treatment">
        </div>
        <div class="producto-info">
            <h4>Veruska - Clinique Treatment</h4>
            <p>Regenerador intensivo para cabello sobreprocesado.</p>
        </div>
    </div>

    <!-- Producto 8 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro8.jpg') }}" alt="Veruska Dual Color Mask">
        </div>
        <div class="producto-info">
            <h4>Veruska - Dual Color Mask</h4>
            <p>Mascarilla Matiz. Neutraliza visos amarillos.</p>
        </div>
    </div>

    <!-- Producto 9 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro9.jpg') }}" alt="Veruska Fresh Curls & Liss">
        </div>
        <div class="producto-info">
            <h4>Veruska - Fresh Curls & Liss</h4>
            <p>Cabello liso y brillante @stilize.</p>
        </div>
    </div>

    <!-- Producto 10 -->
    <div class="producto-card">
        <div class="producto-imagen">
            <img src="{{ asset('imagen/pro10.jpg') }}" alt="Veruska Equinua Hiding Cream">
        </div>
        <div class="producto-info">
            <h4>Veruska - Equinua Hiding Cream</h4>
            <p>Suero estabilizado para uso con herramientas.</p>
        </div>
    </div>

</div> <!-- Fin de .catalogo-grid -->

@endsection