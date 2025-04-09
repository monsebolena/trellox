<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Colaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Mi Perfil</h1>

    <form action="<?=base_url()?>colaborador/actualizar_perfil" method="post">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="[Nombre]" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" value="[Email]" required>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="[Teléfono]" required>
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto de perfil</label>
        <input type="file" class="form-control" id="foto" name="foto">
      </div>
      <button type="submit" class="btn btn-primary">Actualizar perfil</button>
    </form>
  </div>
</body>
</html>
