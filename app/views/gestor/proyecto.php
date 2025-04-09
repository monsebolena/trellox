<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos Gestor</title>
</head>
<body>
    <header>
        <h1>Proyectos del Gestor</h1>
        <nav>
            <ul>
                <li><a href="<?= base_url() ?>gestor/crear_proyecto">Crear Proyecto</a></li>
                <li><a href="<?= base_url() ?>gestor/editar_proyecto/1">Editar Proyecto 1</a></li> <!-- Ejemplo de proyecto -->
            </ul>
        </nav>
    </header>
    <section>
        <h2>Listado de Proyectos</h2>
        <ul>
            <li><a href="<?= base_url() ?>gestor/ver_proyecto/1">Proyecto 1</a></li>
            <li><a href="<?= base_url() ?>gestor/ver_proyecto/2">Proyecto 2</a></li>
        </ul>
    </section>
</body>
</html>
