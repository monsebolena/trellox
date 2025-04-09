<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;

class GestorController extends Controller {

    // Mostrar la página de inicio
    public function index(...$params) {
        $this->view('index');  // Cargar la vista principal
    }

    // Mostrar el dashboard del gestor
    public function dashboard(...$params) {
        $this->view('gestor/dashboard');  // Cargar la vista de dashboard
    }

    // Mostrar los proyectos del gestor
    public function proyectos(...$params) {
        $this->view('gestor/proyectos');  // Cargar la vista de proyectos
    }

    // Crear un nuevo proyecto
    public function crear_proyecto(...$params) {
        $this->view('crear_proyecto');  // Cargar la vista de crear proyecto
    }

    // Ver los detalles de un proyecto
    public function ver_proyecto($id, ...$params) {
        // Aquí puedes pasar más información, dependiendo de la lógica de tu proyecto
        $this->view('gestor/ver_proyecto', ['id' => $id]);  // Cargar la vista de ver proyecto y pasar el ID
    }

    // Editar un proyecto
    public function editar_proyecto($id, ...$params) {
        // Aquí puedes pasar información adicional si es necesario
        $this->view('gestor/editar_proyecto', ['id' => $id]);  // Cargar la vista de editar proyecto y pasar el ID
    }

    // Mostrar invitaciones
    public function invitaciones(...$params) {
        $this->view('gestor/invitaciones');  // Cargar la vista de invitaciones
    }

    // Mostrar las tareas del gestor
    public function tareas(...$params) {
        $this->view('gestor/tareas');  // Cargar la vista de tareas
    }
}
?>
