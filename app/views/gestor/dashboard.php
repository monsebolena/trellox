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
    <!-- Bienvenida -->
    <h2 class="text-center">Bienvenido, <?= htmlspecialchars($data['usuario']) ?></h2>

    <!-- Botones de acción -->
    <div class="d-flex justify-content-between my-4">
      <a href="<?= base_url() ?>gestor/crear_proyecto" class="btn btn-primary">Crear nuevo Proyecto</a>
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalInvitar">
        Invitar nuevo Colaborador
      </button>
    </div>

    <!-- Sección de proyectos -->
    <h4>Mis Proyectos</h4>
    <div class="list-group">
      <?php if (!empty($data['proyectos'])): ?>
        <?php foreach ($data['proyectos'] as $proyecto): ?>
          <a href="<?= base_url() ?>gestor/ver_proyecto/<?= $proyecto->id ?>" class="list-group-item list-group-item-action">
            <h5><?= htmlspecialchars($proyecto->title) ?></h5>
            <small class="text-muted">Inicio: <?= htmlspecialchars($proyecto->fecha_inicio) ?></small>
            <p class="mb-0"><?= htmlspecialchars($proyecto->descripcion) ?></p>
          </a>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">No tienes proyectos todavía. ¡Crea uno nuevo!</p>
      <?php endif; ?>
    </div>
  </div>

  <!-- Modal para invitar colaborador -->
  <div class="modal fade" id="modalInvitar" tabindex="-1" aria-labelledby="modalInvitarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="<?= base_url() ?>gestor/enviar_invitacion" method="post" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalInvitarLabel">Invitar Colaborador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select class="form-control" name="rol" required>
              <option value="colaborador">Colaborador</option>
              <option value="revisor">Revisor</option>
              <option value="admin">Administrador</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Enviar Invitación</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
