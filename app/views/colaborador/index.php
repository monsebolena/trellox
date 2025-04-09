<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaborador - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Bienvenido, Colaborador</h1>
    <p>Aquí es donde puedes gestionar tus tareas y tu perfil.</p>
    
    <h3>Acciones para el Colaborador:</h3>
    <ul>
        <!-- Ver el perfil del colaborador -->
        <li><a href="<?= base_url() ?>colaborador/perfil">Ver Perfil</a></li>
        
        <!-- Ver las tareas del colaborador -->
        <li><a href="<?= base_url() ?>colaborador/tareas">Mis Tareas</a></li>

        <!-- Dashboard del colaborador -->
        <li><a href="<?= base_url() ?>colaborador/dashboard">Dashboard</a></li>
        
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
