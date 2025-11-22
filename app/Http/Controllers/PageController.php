<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Categoria; // Necesario para la función servicios()
use App\Models\Reserva;    // Necesario para la función storeReserva()
use App\Models\Servicio;  // Necesario para la función reservaciones()

class PageController extends Controller
{
    public function inicio()
    {
        return view('pages.inicio');
    }

    /**
     * Muestra la lista de servicios agrupados por categorías.
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
     * Muestra la página del catálogo de productos.
     */
    public function catalogo()
    {
        return view('pages.catalogo');
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
    
    /**
     * Muestra la página del formulario de reservaciones.
     */
    public function reservaciones()
    {
        // Cargar todos los servicios Y sus categorías asociadas (Eager Loading)
        $servicios = Servicio::with('categoria')->get(); 
        
        return view('pages.reservaciones', ['servicios' => $servicios]);
    }

    /**
     * Procesa y guarda una nueva reserva en la base de datos.
     */
    public function storeReserva(Request $request)
    {
        // 1. Validar los datos del formulario (usa los nombres amigables de Blade)
        $validated = $request->validate([
            'nombres' => 'required|string|max:255', 
            'apellido_paterno' => 'required|string|max:255', 
            'apellido_materno' => 'required|string|max:255', 
            
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:50',
            
            'servicios' => 'required|array|min:1', 
            'servicios.*' => 'string',
            
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'mensaje' => 'nullable|string|max:500', 
        ]);

        // 2. CONSTRUCCIÓN Y MAPEO de datos a las COLUMNAS EXACTAS de la tabla 'citas'
        $reservaData = [
            'nombre'       => $validated['nombres'], 
            'apaterno'     => $validated['apellido_paterno'], 
            'amaterno'     => $validated['apellido_materno'], 
            'correo'       => $validated['correo'],
            'telefono'     => $validated['telefono'],
            'servicios'    => implode(', ', $validated['servicios']), // Combina el array a string
            'fechadeseada' => $validated['fecha'], 
            'horadeseada'  => $validated['hora'],  
            'mensaje'      => $validated['mensaje'] ?? null,
        ];

        // 3. Crear y guardar la reserva
        Reserva::create($reservaData); 

        // 4. Redirigir a la vista de "gracias" con los datos
        return view('pages.gracias', ['datos' => $reservaData]);
    }
}