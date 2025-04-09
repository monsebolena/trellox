<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gestor extends Usuario
{
    use HasFactory;

    // Relación con Proyecto (un gestor puede tener muchos proyectos)
    public function proyectos()
    {
        return $this->hasMany(Proyecto::class, 'user_id');
    }

    // Método para obtener sólo los Gestores
    public static function getGestores()
    {
        return self::where('rol', 'gestor')->get();
    }
}
