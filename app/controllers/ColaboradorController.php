<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;

class ColaboradorController extends Controller {

    // Mostrar la página de inicio (index)
    public function index(...$params) {
        $this->view('index');  // Cargar la vista de inicio para el colaborador
    }

    // Mostrar el login del colaborador
    public function login(...$params) {
        $this->view('login');  // Cargar la vista de login
    }

    // Mostrar las tareas del colaborador
    public function tareas(...$params) {
        $this->view('tareas');  // Cargar la vista de tareas
    }

    // Mostrar el perfil del colaborador
    public function perfil(...$params) {
        $this->view('perfil');  // Cargar la vista de perfil
    
    }

    public function dashboard(...$params) {
        $usuario = $_SESSION['usuario'] ?? 'Invitado'; // O el sistema que uses para manejar sesiones
        $proyectos = $this->modeloProyecto->obtenerProyectosPorUsuario($usuario); // O como lo tengas definido
    
        $this->view('gestor/dashboard', [
            'usuario' => $usuario,
            'proyectos' => $proyectos
        ]);
    }
    
}
?>
