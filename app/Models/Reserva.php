<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    
    // CRÍTICO 1: Nombre de la tabla en la DB
    protected $table = 'citas'; 

    // CRÍTICO 2: Deshabilita los timestamps
    public $timestamps = false;
    
    // CRÍTICO 3: Lista de TODOS los campos que se van a guardar
    // (Deben coincidir EXATAMENTE con las columnas de la tabla 'citas')
    protected $fillable = [
        'nombre',       
        'apaterno',
        'amaterno',
        'correo', 
        'telefono', 
        'servicios',    
        'fechadeseada', 
        'horadeseada', 
        'mensajeadd',   // CRÍTICO: El nombre de tu columna
    ];
    
    protected $primaryKey = 'idcliente';
}