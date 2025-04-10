<?php
// /app/views/colaborador/perfil.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Colaborador</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="profile-container">
        <h2>Editar Perfil</h2>

        <form action="/colaborador/actualizar_perfil" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($usuario['nombre']); ?>" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" value="<?php echo htmlspecialchars($usuario['apellidos']); ?>" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono" value="<?php echo htmlspecialchars($usuario['telefono']); ?>" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto">
                <p>Foto actual: <img src="/uploads/<?php echo $usuario['foto']; ?>" alt="Foto de perfil" width="100"></p>
            </div>

            <button type="submit">Actualizar Perfil</button>
        </form>
    </div>
</body>
</html>
