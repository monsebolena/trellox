<!-- Views/gestor/perfil.php -->
<?php include('header.php'); ?>

<div class="container">
    <h2>Mi Perfil</h2>
    <form action="actualizar_perfil.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario->nombre; ?>" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $usuario->apellido; ?>" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $usuario->telefono; ?>" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto de Perfil:</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
    </form>
</div>

<?php include('footer.php'); ?>
