<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto - Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        }

        h1 {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            width: 100%;
            padding: 12px;
            font-size: 1.2rem;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            width: 100%;
            padding: 12px;
            font-size: 1.2rem;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Editar Proyecto</h1>

    <!-- Formulario para editar proyecto -->
    <form action="<?=base_url()?>gestor/actualizar_proyecto" method="post">
        <input type="hidden" name="id" value="<?= $proyecto['id'] ?>">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título del Proyecto</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $proyecto['titulo'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?= $proyecto['descripcion'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="<?= $proyecto['fecha_inicio'] ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Proyecto</button>
    </form>

    <!-- Formulario para eliminar proyecto -->
    <form action="<?= base_url() ?>gestor/eliminar_proyecto" method="post" class="mt-3">
        <input type="hidden" name="id" value="<?= $proyecto['id'] ?>">
        <button type="submit" class="btn btn-danger">Eliminar Proyecto</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
