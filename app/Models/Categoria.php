<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Relación 1:N (Una categoría tiene muchos servicios)
    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'id_categoria');
    }
}