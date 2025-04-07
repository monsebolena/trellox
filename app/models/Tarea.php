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

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'project_id');
    }

    public function colaborador()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'task_id');
    }
}
