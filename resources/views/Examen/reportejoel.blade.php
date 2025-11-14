@extends('principal')

@section('contenido')
<div class="container my-5"> {{-- 'my-5' añade margen arriba y abajo --}}
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12"> {{-- Ocupa 10 columnas en pantallas grandes, 12 en medianas/pequeñas --}}
            
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Reporte de Animales (Examen Joel)</h4>
                </div>
                
                <div class="card-body">
                    {{-- Mensaje de éxito (Flash Session) --}}
                    @if (Session::has('mensaje_animal'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('mensaje_animal') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- En caso de que no haya registros --}}
                    @if($animales->isEmpty())
                        <div class="alert alert-info mt-3" role="alert">
                            Aún no hay animales registrados en la base de datos.
                        </div>
                    @else
                        {{-- La tabla solo se muestra si NO está vacía --}}
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mt-4 align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Especie</th>
                                        <th style="width: 150px;">Acciones</th> {{-- Damos un ancho fijo a las acciones --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Ciclo para recorrer el array $animales --}}
                                    @foreach($animales as $a)
                                        <tr>
                                            <td>{{ $a->id }}</td>
                                            <td>
                                                {{-- 
                                                    ¡CAMBIO AQUÍ! 
                                                    Usamos la variable $a->foto (o como se llame tu columna).
                                                    Usamos la carpeta 'imagen/' (singular) de tu captura.
                                                --}}
                                                <img src="{{ asset('imagen/' . $a->foto) }}" 
                                                     alt="{{ $a->nombre_animal }}" 
                                                     class="rounded-circle"
                                                     style="width: 60px; height: 60px; object-fit: cover;">
                                            </td>
                                            <td>{{ $a->nombre_animal }}</td>
                                            <td>{{ $a->nombre_especie }}</td>
                                            <td>
                                                {{-- Botón Eliminar --}}
                                                <form action="{{ route('eliminaAnimal') }}" method="POST" style="display:inline;">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $a->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"
                                                            onclick="return confirm('¿Estás seguro de eliminar a {{ $a->nombre_animal }}?');">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    
                </div> {{-- Fin card-body --}}
            </div> {{-- Fin card --}}

        </div> {{-- Fin col --}}
    </div> {{-- Fin row --}}
</div> {{-- Fin container --}}
@stop