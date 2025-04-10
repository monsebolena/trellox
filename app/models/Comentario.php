<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    // Definir la tabla en la base de datos
    protected $table = 'comentarios';

    // Definir los campos de la tabla
    protected $fillable = [
        'contenido', 'tarea_id', 'usuario_id'
    ];

    // Relación con Tarea (un comentario pertenece a una tarea)
    public function tarea()
    {
        return $this->belongsTo(Tarea::class, 'tarea_id');
    }

    // Relación con Usuario (un comentario es creado por un usuario)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Crear un nuevo comentario en una tarea
    public static function crearComentario($contenido, $tarea_id, $usuario_id)
    {
        $comentario = new self();
        $comentario->contenido = $contenido;
        $comentario->tarea_id = $tarea_id;
        $comentario->usuario_id = $usuario_id;
        $comentario->save();  // Guardar el comentario
        return $comentario;
    }

    // Obtener los comentarios de una tarea
    public static function obtenerComentariosPorTarea($tarea_id)
    {
        return self::where('tarea_id', $tarea_id)->orderBy('created_at', 'asc')->get();  // Devuelve los comentarios de una tarea ordenados por fecha
    }
}
?>
