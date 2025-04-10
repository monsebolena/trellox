<?php
namespace Formacom\controllers;

use Formacom\Models\Proyecto;
use Formacom\Core\Controller;
use Formacom\Models\Usuario; // Asegúrate de que la ruta sea correcta para tu proyecto


class GestorController extends Controller {

    // Mostrar la página de inicio
    public function index(...$params) {
        $this->view('index');  // Cargar la vista principal
    }

    // Mostrar el dashboard del gestor
    public function dashboard(...$params) {
        session_start();
        $nombre=$_SESSION['usuario_nombre'];  // Obtener el nombre del usuario de la sesión
        $proyectosGestor=Proyecto::where('user_id', $_SESSION['usuario_id'])->get();  // Obtener los proyectos del gestor actual
        $this->view('dashboard',["usuario"=>$nombre,"proyectos"=>$proyectosGestor]);  // Cargar la vista de dashboard
    }

    // Mostrar los proyectos del gestor
    public function proyectos(...$params) {
        $this->view('proyectos');  // Cargar la vista de proyectos
    }

    // Crear un nuevo proyecto
    public function crear_proyecto(...$params) {
        $this->view('crear_proyecto');  // Cargar la vista de crear proyecto
    }
    public function guardar_proyecto(...$params) {
        // Validación básica de datos
        if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
            session_start();  // Iniciar la sesión si no está iniciada
            // Crear un nuevo proyecto
            $proyecto = new Proyecto();
            $proyecto->title = $_POST['titulo'];
            $proyecto->descripcion = $_POST['descripcion'];
            $proyecto->user_id = $_SESSION['usuario_id'];  // Asumimos que el Gestor está logueado

            // Guardar el proyecto
            if ($proyecto->save()) {
                // Redirigir al gestor al dashboard u otra página
                $url='Location: '. base_url() . 'gestor/dashboard';
                header($url);
            } else {
                // Si hay un error, devolver un mensaje
                echo "Hubo un error al crear el proyecto.";
            }
        } else {
            // Si los datos del formulario no están completos, retornar un error
            echo "Por favor, completa todos los campos.";
        }
    }

    // Ver los detalles de un proyecto
    public function ver_proyecto($id, ...$params) {
        // Aquí puedes pasar más información, dependiendo de la lógica de tu proyecto
        $this->view('ver_proyecto', ['id' => $id]);  // Cargar la vista de ver proyecto y pasar el ID
    }

    // Editar un proyecto
    public function editar_proyecto($id, ...$params) {
        // Aquí puedes pasar información adicional si es necesario
        $this->view('editar_proyecto', ['id' => $id]);  // Cargar la vista de editar proyecto y pasar el ID
    }

    // Mostrar invitaciones
    public function invitaciones(...$params) {
        $this->view('invitaciones');  // Cargar la vista de invitaciones
    }

    // Mostrar las tareas del gestor
    public function tareas(...$params) {
        $this->view('tareas');  // Cargar la vista de tareas
    }

  
    // Procesar el registro de un nuevo usuario
    public function registro() {
        // Verificar que todos los campos requeridos estén presentes
        if (!isset($_POST['email'], $_POST['contraseña'], $_POST['nombre'], $_POST['apellidos'], $_POST['telefono'])) {
            // Si falta algún dato, redirigir con mensaje de error
            $_SESSION['error'] = 'Por favor, complete todos los campos.';
            $this->view('registro'); 
            return;  // Terminar la ejecución del método
        }

        // Obtener los datos del formulario
        $email = $_POST['email'];
        $password = $_POST['contraseña'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];
        $rol = "GESTOR";  // Asignar rol por defecto como Gestor

        // Validar que el correo electrónico no esté ya registrado
        $usuarioExistente = Usuario::where('email', $email)->first();
        if ($usuarioExistente) {
            $_SESSION['error'] = 'El correo electrónico ya está registrado.';
            header('Location: ' . base_url() . 'gestor/registro');
            exit();
        }

        // Encriptar la contraseña antes de guardarla
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Crear el nuevo usuario
        $usuario = new Usuario();
        $usuario->email = $email;
        $usuario->contraseña = $hashedPassword;
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellidos;
        $usuario->telefono = $telefono;
        $usuario->rol = $rol;

        // Guardar el usuario en la base de datos
        if ($usuario->save()) {
            $_SESSION['success'] = 'Usuario registrado correctamente';
            header('Location: ' . base_url() . 'gestor/dashboard');
            exit();
        } else {
            $_SESSION['error'] = 'Hubo un error al registrar el usuario. Intenta de nuevo.';
            header('Location: ' . base_url() . 'gestor/registro');
            exit();
        }
    }

    // Procesar el login
    public function procesarLogin(...$params) {
        // Obtener los datos del formulario
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
     
        
        // Buscar el usuario por el email
        $usuario = Usuario::where('email', $email)->first();

        // Verificar si existe el usuario
        if ($usuario) {
            // Verificar si la contraseña es correcta
            if (password_verify($password, $usuario->contraseña)) {
                session_start();  // Iniciar la sesión
                // Si es correcto, iniciar sesión y redirigir al dashboard
                $_SESSION['usuario_id'] = $usuario->id;
                $_SESSION['usuario_nombre'] = $usuario->nombre;
                $_SESSION['usuario_rol'] = $usuario->rol;

                // Redirigir según el rol (gestor o colaborador)
                if ($usuario->rol == 'GESTOR') {
                    $url='Location: '. base_url() . 'gestor/dashboard';  // Redirigir a la vista del gestor
                } else {
                    $url='Location: '. base_url() . 'colaborador/dashboard';  // Redirigir a la vista del colaborador
                }
                header($url);
                exit;
            } else {
                // Si la contraseña es incorrecta
                $this->view('login', ['error' => 'La contraseña es incorrecta']);
            }
        } else {
            // Si no se encuentra el usuario
            $this->view('login', ['error' => 'No se encontró un usuario con ese email']);
        }
    }
}


?>
