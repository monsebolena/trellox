<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;



class Usuario extends Model
{

    // Definir la tabla en la base de datos
    protected $table = 'usuario';

    protected $primaryKey = 'id';
    public $timestamps = false; // Desactivar los timestamps automáticos

    //Usuario crea proyectos user_id
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'user_id');
    }
}
?>
