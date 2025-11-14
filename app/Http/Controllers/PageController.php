<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Categoria; // Necesario para la función servicios()
use App\Models\Reserva;    // Necesario para la función storeReserva()
use App\Models\Servicio;  // <-- ¡ESTA LÍNEA ES LA SOLUCIÓN!

class PageController extends Controller
{
    public function inicio()
    {
        return view('pages.inicio');
    }

    /**
     * Muestra la lista de servicios agrupados por categorías.
     * (Función corregida y consolidada)
     */
    public function servicios()
    {
        // Obtiene todas las categorías y precarga sus servicios asociados (Eager Loading)
        $categorias = Categoria::with('servicios')->get(); 

        return view('pages.servicios', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Muestra la página "Nosotros".
     */
    public function nosotros()
    {
        return view('pages.nosotros');
    }

    /**
     * Muestra la página de contacto.
     */
    public function contacto()
    {
        return view('pages.contacto');
    }
    
    // app/Http/Controllers/PageController.php

public function reservaciones()
{
    // 1. Cargar la relación 'categoria' (Eager Loading)
    $servicios = Servicio::with('categoria')->get();

    // 2. Agrupar la colección de servicios por el nombre de la categoría
    $serviciosAgrupados = $servicios->groupBy('categoria.nombre_categoria'); 

    // 3. Pasar la colección YA AGRUPADA a la vista con el nombre correcto
    return view('pages.reservaciones', ['serviciosAgrupados' => $serviciosAgrupados]);
}
// app/Http/Controllers/PageController.php
public function storeReserva(Request $request)
{

    // 1. Validar los datos del formulario (usa los nombres amigables de Blade)
    $validated = $request->validate([
        'nombre' => 'required|string|max:255', 
        'apellido_paterno' => 'required|string|max:255', 
        'apellido_materno' => 'required|string|max:255', 
        
        'correo' => 'required|email|max:255',
        'telefono' => 'required|string|max:50',
        
        //'servicios' => 'required|array|min:1', 
        'servicios' => 'array',
        'servicios.*' => 'string',
        
        'fecha' => 'required|date',
        'hora' => 'required|date_format:H:i',
        'mensajeadd' => 'nullable|string|max:500', 
    ]);
    

    // 2. CONSTRUCCIÓN Y MAPEO de datos a las COLUMNAS EXACTAS de la tabla 'citas'
    $reservaData = [
        // Mapeo de Nombres (Columna: nombre)
        'nombre'       => $validated['nombre'], 
        // Mapeo de Apellidos (Columnas: apaterno, amaterno)
        'apaterno'     => $validated['apellido_paterno'], 
        'amaterno'     => $validated['apellido_materno'], 
        
        // Mapeo de Contacto
        'correo'       => $validated['correo'],
        'telefono'     => $validated['telefono'],
        
        // Mapeo de Servicios (Columna: servicios)
        'servicios'    => implode(', ', $validated['servicios']), // Combina el array a string
        
        // Mapeo de Fecha y Hora (Columnas: fechadeseada, horadeseada)
        'fechadeseada' => $validated['fecha'], 
        'horadeseada'  => $validated['hora'],  
        
        // Mapeo del Mensaje
        'mensajeadd'      => $validated['mensajeadd'],
    ];

    dd($reservaData);
    // 3. Crear y guardar la reserva
    Reserva::create($reservaData); 

    // 4. Redirigir a la vista de "gracias" con los datos
    return view('pages.gracias', ['datos' => $reservaData]);
}

}

