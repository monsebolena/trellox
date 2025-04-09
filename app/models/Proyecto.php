<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyecto';

    protected $fillable = [
        'title',
        'descripcion',
        'user_id', // Este es el gestor que crea el proyecto
    ];

    // Relación con Usuario (un proyecto es creado por un gestor)
    public function gestor()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    // Relación con Tareas (un proyecto tiene muchas tareas)
    public function tareas()
    {
        return $this->hasMany(Tarea::class, 'project_id');
    }
}
