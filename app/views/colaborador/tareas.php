<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas del Colaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tus Tareas</h1>
        <p>Aquí puedes ver todas tus tareas asignadas.</p>

        <ul class="list-group">
            <?php foreach ($tareas as $tarea): ?>
                <li class="list-group-item">
                    <h5><?= htmlspecialchars($tarea['titulo']) ?></h5>
                    <p><?= htmlspecialchars($tarea['descripcion']) ?></p>
                    <p><strong>Estado:</strong> <?= htmlspecialchars($tarea['estado']) ?></p>

                    <?php if ($tarea['estado'] !== 'completada'): ?>
                        <a href="<?= base_url() ?>colaborador/marcar_como_completada/<?= $tarea['id'] ?>" class="btn btn-success">Marcar como completada</a>
                    <?php endif; ?>

                    <!-- Formulario para añadir comentario -->
                    <form action="<?= base_url() ?>colaborador/agregar_comentario/<?= $tarea['id'] ?>" method="POST" class="mt-3">
                        <textarea class="form-control" name="comentario" rows="3" placeholder="Añadir un comentario..."></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Añadir Comentario</button>
                    </form>

                    <hr>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
