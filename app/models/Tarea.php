<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $table = 'tarea';

    protected $fillable = [
        'title',
        'duedate',
        'startdate',
        'status',
        'project_id',
        'user_id',
        'descripcion',
    ];

    // Relación con Proyecto (una tarea pertenece a un proyecto)
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'project_id');
    }

    // Relación con Usuario (una tarea está asignada a un usuario)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    // Relación con Comentarios (una tarea tiene muchos comentarios)
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'task_id');
    }
}
