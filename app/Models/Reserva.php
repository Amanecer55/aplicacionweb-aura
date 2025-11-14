<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    
    // 1. CRÍTICO: Especifica el nombre real de la tabla en la base de datos.
    protected $table = 'citas'; 

    // 2. CRÍTICO: Deshabilita la gestión automática de las columnas created_at/updated_at,
    // ya que no existen en la tabla 'citas'.
    public $timestamps = false;
    
    // 3. CRÍTICO: Permite la asignación masiva de estos 9 campos.
    // Los nombres aquí DEBEN coincidir con los nombres de las COLUMNAS de tu tabla 'citas'.
    protected $fillable = [
        'nombre',       // Columna 1
        'apaterno',     // Columna 2
        'amaterno',     // Columna 3
        'correo',       // Columna 4
        'telefono',     // Columna 5
        'servicios',    // Columna 6
        'fechadeseada', // Columna 7
        'horadeseada',  // Columna 8
        'mensajeadd',   // Columna 9 (El nombre de tu DB)
    ];
    
    // Opcional: Especifica el nombre de la llave primaria si no es 'id'
    protected $primaryKey = 'idcliente';
}