<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
</head>
<body>
    <header>
        <h1>Editar Proyecto #<?= $id ?></h1>
    </header>
    <section>
        <form action="<?= base_url() ?>gestor/editar_proyecto/<?= $id ?>" method="POST">
            <label for="project_name">Nombre del Proyecto:</label>
            <input type="text" name="project_name" id="project_name" value="Proyecto <?= $id ?>" required>
            <button type="submit">Guardar cambios</button>
        </form>
    </section>
</body>
</html>
