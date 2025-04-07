<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario'; // Define el nombre de la tabla
    protected $primaryKey = 'id'; // Define la clave primaria
    public $timestamps = false; // Habilitar la gestión de timestamps (created_at, updated_at)


    // Relación: Un usuario puede tener muchos proyectos (gestor)
    public function proyectos() {
        return $this->hasMany(Proyecto::class, 'user_id');  // Un gestor puede tener muchos proyectos
    }

    // Relación: Un usuario puede tener muchas tareas asignadas (colaborador)
    public function tareas() {
        return $this->hasMany(Tarea::class, 'user_id');  // Un colaborador puede tener muchas tareas
    }

    // Relación: Un usuario puede hacer muchos comentarios
    public function comentarios() {
        return $this->hasMany(Comentario::class, 'user_id');  // Un usuario puede hacer muchos comentarios
    }

    // Método para verificar si un usuario es un gestor
    public function esGestor() {
        return $this->rol === 'gestor';
    }

    // Método para verificar si un usuario es un colaborador
    public function esColaborador() {
        return $this->rol === 'colaborador';
    }

    // Función para asociar una contraseña de manera segura
    public function setContraseñaAttribute($password) {
        $this->attributes['contraseña'] = bcrypt($password);  // Encriptar la contraseña
    }
}
?>
