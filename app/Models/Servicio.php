<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Importa la clase

class Servicio extends Model
{
    // Define el nombre de la tabla si no usa la convención plural por defecto
    protected $table = 'servicios'; 
    
    // Define la clave primaria si no es 'id'
    protected $primaryKey = 'id_servicio';
    
    // Define la relación con el modelo Categoria
    public function categoria(): BelongsTo
    {
        // belongsTo(ClaseDestino::class, 'clave_foranea_en_Servicio', 'clave_primaria_en_Categoria')
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria'); 
    }
}