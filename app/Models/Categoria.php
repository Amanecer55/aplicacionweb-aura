<?php
// app/Models/Categoria.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    // Indica a Laravel el nombre de tu tabla
    protected $table = 'categorias'; 
    
    // Define la relación de uno a muchos (Categoria tiene muchos Servicios)
    public function servicios(): HasMany
    {
        // hasMany(ClaseDestino::class, 'clave_foranea_en_tabla_destino', 'clave_local_en_tabla_actual')
        return $this->hasMany(Servicio::class, 'id_categoria', 'id_categoria');
    }
}