<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    
    // CRÍTICO: Indica a Laravel que use la tabla 'citas'
    protected $table = 'citas'; 

    // Opcional: Si no usas las columnas created_at/updated_at
    public $timestamps = false;
    
    // CRÍTICO: Mapeo de los campos que Laravel PUEDE guardar.
    protected $fillable = [
        'nombre',
        'apaterno',     // Coincide con la columna de tu DB
        'amaterno',     // Coincide con la columna de tu DB
        'correo', 
        'telefono', 
        'fechadeseada', // Coincide con la columna de tu DB
        'horadeseada',  // Coincide con la columna de tu DB
        'mensajedd',      // Coincide con la columna de tu DB
        'servicios',    // ¡NUEVA COLUMNA, ahora lista para ser guardada!
    ];
}