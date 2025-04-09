<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitaciones - Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1>Invitaciones</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Colaborador</th>
          <th>Proyecto</th>
          <th>Fecha de invitación</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan Pérez</td>
          <td>Proyecto 1</td>
          <td>2025-04-10</td>
          <td>
            <a href="<?=base_url()?>gestor/aceptar_invitacion/1" class="btn btn-success">Aceptar</a>
            <a href="<?=base_url()?>gestor/rechazar_invitacion/1" class="btn btn-danger">Rechazar</a>
          </td>
        </tr>
        <tr>
          <td>Maria Gómez</td>
          <td>Proyecto 2</td>
          <td>2025-04-12</td>
          <td>
            <a href="<?=base_url()?>gestor/aceptar_invitacion/2" class="btn btn-success">Aceptar</a>
            <a href="<?=base_url()?>gestor/rechazar_invitacion/2" class="btn btn-danger">Rechazar</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
