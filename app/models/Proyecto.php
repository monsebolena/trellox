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
        'user_id',
    ];

    public function gestor()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    public function tareas()
    {
        return $this->hasMany(Tarea::class, 'project_id');
    }
}
