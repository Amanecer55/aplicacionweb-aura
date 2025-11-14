@extends('layouts.app')

@section('content')
<h2 class="seccion-titulo">Lista de precios</h2>

<div class="servicios-contenedor">
    
    {{-- 1. Bucle principal: Itera sobre todas las categorías de la BD --}}
    @foreach ($categorias as $categoria)

    <section class="servicio-categoria">
        {{-- Muestra el nombre de la categoría (ej: "Servicios de Cabello") --}}
        <h3>{{ $categoria->nombre_categoria }}</h3> 
        
        <div class="servicios-grid">
            
            {{-- 2. Bucle anidado: Itera sobre los servicios de la categoría actual --}}
            @foreach ($categoria->servicios as $servicio)
                <div class="servicio-tarjeta">
                    <div class="info">
                        {{-- Muestra el nombre del servicio (ej: "Corte") --}}
                        <h4>{{ $servicio->nombre_servicio }}</h4> 
                        
                        {{-- Opcional: Para el texto "Desde". Requiere lógica/campo en DB. --}}
                        {{-- @if (isset($servicio->es_desde) && $servicio->es_desde)
                            <span>Desde</span>
                        @endif --}}
                    </div>
                    
                    {{-- Muestra el precio formateado (ej: $150) --}}
                    <div class="precio">${{ number_format($servicio->precio, 0, ',', '.') }}</div>
                </div>
            @endforeach
            
        </div>
    </section>

    @endforeach

</div>
@endsection