<!-- /app/views/gestor/dashboard.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Bienvenido, <?= htmlspecialchars($data['usuario']) ?></h2>

        <!-- Botones para crear proyectos y colaboradores -->
        <div class="mb-4">
            <a href="<?=base_url()?>gestor/crear_proyecto" class="btn btn-primary">Crear nuevo Proyecto</a>
            <a href="/gestor/invitar_colaborador" class="btn btn-success">Invitar nuevo Colaborador</a>
        </div>

        <!-- Listado de proyectos -->
        <h4>Mis Proyectos</h4>
        <div class="list-group">
            <?php if (count($data['proyectos']) > 0): ?>
                <?php foreach ($data['proyectos'] as $proyecto): ?>
                    <a href="/gestor/ver_proyecto/<?= $proyecto->id ?>" class="list-group-item list-group-item-action">
                        <h5><?= htmlspecialchars($proyecto->title) ?></h5>
                        <p><?= htmlspecialchars($proyecto->descripcion) ?></p>

                        

                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No tienes proyectos todavía. ¡Crea uno nuevo!</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS (si es necesario para algún componente interactivo) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
