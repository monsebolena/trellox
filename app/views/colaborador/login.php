<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Colaborador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/login.css">
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-sm-6 col-lg-6 col-xl-5">
        <img src="<?=base_url()?>assets/img/draw2.webp" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-sm-4 col-lg-6 col-xl-4 offset-xl-1">
        <form action="<?=base_url()?>colaborador/login" method="post">
          <div class="form-outline mb-4">
            <input required name="email" type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Correo electrónico" />
            <label class="form-label" for="form3Example3">Correo electrónico</label>
          </div>
          <div class="form-outline mb-3">
            <input required name="password" type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Contraseña" />
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">Recordarme</label>
            </div>
            <a href="#!" class="text-body">¿Olvidaste la contraseña?</a>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar sesión</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes cuenta? <a href="<?=base_url()?>login/register" class="link-danger">Registrarse</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>
