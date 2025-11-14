<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    // Relación N:1 (Un servicio pertenece a una categoría)
    public function categoria()
    {
        // El segundo argumento es la clave foránea en la tabla servicios
        return $this->belongsTo(Categoria::class, 'id_categoria'); 
    }
}