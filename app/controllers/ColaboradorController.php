<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;

class ColaboradorController extends Controller {

    // Mostrar la página de inicio (index)
    public function index(...$params) {
        $this->view('index');  // Mantengo el index, como indicaste
    }

    // Mostrar el login del colaborador
    public function login(...$params) {
        $this->view('colaborador/login');  // Cargar la vista de login
    }

    // Mostrar el dashboard del colaborador
    public function dashboard(...$params) {
        $this->view('colaborador/dashboard');  // Cargar la vista de dashboard
    }

    // Mostrar las tareas del colaborador
    public function tareas(...$params) {
        $this->view('colaborador/tareas');  // Cargar la vista de tareas
    }

    // Mostrar el perfil del colaborador
    public function perfil(...$params) {
        $this->view('colaborador/perfil');  // Cargar la vista de perfil
    }
}
?>
