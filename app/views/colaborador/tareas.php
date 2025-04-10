<?php
// views/colaborador/tareas.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas - Colaborador</title>
    <link rel="stylesheet" href="/path_to_your_styles.css"> <!-- Ruta a tu archivo CSS -->
</head>
<body>
    <div class="tareas-container">
        <h2>Tareas asignadas</h2>
        
        <?php if (!empty($tareas)): ?>
            <ul class="tareas-list">
                <?php foreach ($tareas as $tarea): ?>
                    <li class="tarea-item">
                        <h3><?= htmlspecialchars($tarea->titulo) ?></h3>
                        <p><?= htmlspecialchars($tarea->descripcion) ?></p>
                        <p><strong>Estado:</strong> <?= htmlspecialchars($tarea->estado) ?></p>
                        <p><strong>Fecha límite:</strong> <?= htmlspecialchars($tarea->fecha_vencimiento) ?></p>
                        <form action="/colaborador/marcar_como_completada/<?= $tarea->id ?>" method="POST">
                            <button type="submit" class="btn-completar">Marcar como completada</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No tienes tareas asignadas.</p>
        <?php endif; ?>
    </div>
</body>
</html>
