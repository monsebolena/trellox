<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor - Gestión de Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Gestión de Proyectos</h1>
    <p>Aquí es donde puedes gestionar todos los proyectos.</p>
    
    <h3>Acciones de Gestión de Proyectos:</h3>
    <ul>
        <!-- Dashboard -->
        <li><a href="<?= base_url() ?>gestor/login">Iniciar Sesion</a></li>
        
        <!-- Ver Proyectos -->
        <li><a href="<?= base_url() ?>gestor/proyectos">Ver Proyectos</a></li>

        <!-- Crear Proyecto -->
        <li><a href="<?= base_url() ?>gestor/crear_proyecto">Crear Proyecto</a></li>

        <!-- Invitaciones -->
        <li><a href="<?= base_url() ?>gestor/invitaciones">Ver Invitaciones</a></li>

        <!-- Tareas -->
        <li><a href="<?= base_url() ?>gestor/tareas">Ver Tareas</a></li>
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
