<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    // Definir la tabla en la base de datos
    protected $table = 'tareas';

    // Definir los campos de la tabla
    protected $fillable = [
        'titulo', 'descripcion', 'fecha_vencimiento', 'estado', 'proyecto_id', 'colaborador_id'
    ];

    // Relación con Proyecto (una tarea pertenece a un proyecto)
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }

    // Relación con Usuario (una tarea está asignada a un colaborador)
    public function colaborador()
    {
        return $this->belongsTo(Usuario::class, 'colaborador_id');
    }

    // Cambiar el estado de una tarea
    public function cambiarEstado($estado)
    {
        $this->estado = $estado;
        $this->save();  // Actualiza el estado de la tarea
    }

    // Obtener tareas pendientes de un proyecto
    public static function obtenerTareasPendientes($proyecto_id)
    {
        return self::where('proyecto_id', $proyecto_id)->where('estado', 'Pendiente')->get();
    }

    // Obtener tareas asignadas a un colaborador
    public static function obtenerTareasPorColaborador($colaborador_id)
    {
        return self::where('colaborador_id', $colaborador_id)->get();
    }
}
?>
