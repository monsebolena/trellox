<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;


class Proyecto extends Model
{

   
    // Definir la tabla en la base de datos
    protected $table = 'proyecto';

    protected $primaryKey = 'id';
    public $timestamps = false; // Desactivar los timestamps automáticos

    // Definir las relaciones con otros modelos si es necesario
    //Los proyectos pertenecen a Usuario user_id    
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'user_id');
    }
}
?>
