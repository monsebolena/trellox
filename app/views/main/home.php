<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trellox - Gestión de Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>
    <div class="container">
        <header class="text-center my-5">
            <h1 class="display-4">Bienvenido a Trellox</h1>
            <p class="lead">Gestiona tus proyectos, asigna tareas y sigue el progreso de tu equipo de manera eficiente.</p>
        </header>

        <section class="row my-5">
            <div class="col-md-6">
                <h2>Iniciar sesión</h2>
                <p>Accede a tu cuenta como Gestor o Colaborador utilizando tu correo electrónico y contraseña.</p>
                
                <!-- Formulario de Login -->
                <form action="<?= base_url() ?>gestor/procesarLogin" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>¿No tienes cuenta?</h2>
                <p>Si eres **Gestor** puedes registrarte para empezar a crear proyectos. Si eres **Colaborador**, espera a recibir una invitación de un Gestor para comenzar a trabajar.</p>
                <a href="<?= base_url() ?>gestor/registro" class="btn btn-primary btn-lg">Registrarse como Gestor</a>
                <p class="mt-3">Si ya tienes una cuenta y no recuerdas tu contraseña, puedes recuperarla desde el formulario de login.</p>
            </div>
        </section>

        <section class="my-5">
            <h2 class="text-center">¿Qué es Trellox?</h2>
            <p class="lead text-center">Trellox es una herramienta de gestión de proyectos que facilita la colaboración entre gestores y colaboradores. Con Trellox, puedes organizar proyectos, asignar tareas, monitorear el progreso y facilitar la comunicación con tu equipo a través de comentarios.</p>
            <div class="text-center">
                <a href="#proyectos" class="btn btn-info btn-lg">Ver más sobre los proyectos</a>
            </div>
        </section>

        <section id="proyectos" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center">Características de los Proyectos</h2>
                <p class="text-center lead">Un proyecto en Trellox tiene las siguientes características:</p>
                <div class="row">
                    <div class="col-md-4">
                        <h4>Título del Proyecto</h4>
                        <p>El nombre del proyecto debe ser descriptivo y claro, para que todos los miembros del equipo entiendan el objetivo.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Descripción</h4>
                        <p>La descripción debe incluir los objetivos, plazos y cualquier detalle importante sobre el proyecto.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Asignación de Tareas</h4>
                        <p>Cada tarea dentro del proyecto se asigna a un colaborador específico y tiene un estado (Pendiente, En progreso, Completada).</p>
                    </div>
                </div>
            </div>
        </section>

        <footer class="text-center my-5">
            <p>&copy; 2025 Trellox. Todos los derechos reservados.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBgz9ZAN3vKnP9bH0MzxenZ12T60IMZOn7oag5H6h5tOQf8v0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-cu+vHh4v2CkG1PiN99P4lGpF1hbydInxsTLCpt9smtt0BfI9dZCrV/R9qg4omVxj" crossorigin="anonymous"></script>
</body>

</html>
