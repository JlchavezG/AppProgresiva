<?php include 'includes/RecuperarPass.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery.js"></script>
    <title>Recuperar Password de Usuario | iscjlchavezg</title>
</head>
<body>
<div class="container py-4">
    <div class="row text-center">
        <div class="container text-center py-2">
             <h1 class="display-6"> Recuperar password | <span class="text-warning">Usuarios</Span></h1>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 mt-3">
                <a href="index.php" class="text-decoration-none">
                <svg class="bi text-danger" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-left-circle-fill"/>
                </svg> Regresar
                </a>
        </div>
         <div class="col-sm-6 col-md-6 col-lg-6 mt-3">
         <a href="#" class="text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#AyudaPass" aria-controls="AyudaPass">
                <svg class="bi text-warning" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#lightbulb"/>
                </svg> Ayuda
                </a>
         </div>
    </div>
    <div class="row justify-content-center h-100 py-4">
        <div class="card shadow">
              <span class="text-muted text-center mt-3">
              <svg class="bi" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#pencil"/>
                </svg> Ingresa tu nombre de usuario junto con tu email registrado</span><hr>
              <div class="row container justify-content-center">
              <div class="col-sm-6 col-md-6 col-lg-6 text-center py-2">
                  <img src="img/password.png" width="200px;" class="img-fluid">
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate method="Post" autocomplete="off">
                   <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-fill"/>
                        </svg>
                     </span>
                     <input type="text" class="form-control" name="usuario" placeholder="Usuario" aria-label="Usuario" aria-describedby="usuario" required>
                     <div class="invalid-feedback">
                        Por favor ingresa un usuario para la busqueda
                     </div>
                   </div>
                   <div class="input-group mb-3">
                     <span class="input-group-text" id="basic-addon1">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#envelope"/>
                        </svg>
                     </span>
                     <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="Email" required>
                     <div class="invalid-feedback">
                        Por favor ingresa un email para la busqueda
                     </div>
                   </div>
                   <div class="py-2 d-grid gap-2 py-3">
                       <input type="submit" name="buscar" value="Buscar" class="btn btn-sm btn-success bg-gradient">
                   </div>
                  </form>
              </div>
        </div>
    </div>
     <div class="text-center py-3">
        <?php echo $alerta; ?>
     </div>
     <div class="mb-3 text-center">
         <span id='message'></span>
      </div>
    </div>
    <div class="container ">
        <div class="row d-flex justify-content-center mt-2">
           <img src="img/craken.png" alt="logo" style="width:100px;">
           <span class="text-center text-muted"> Iscjlchavezg@2021 | Webdeveloper</span>
        </div>
    </div>
</div>
<?php include 'Ayuda/AyudaRecPass.php';?>
<script src="js/bootstrap.min.js"></script>
<script src="js/pace.js"></script>
<script src="js/main.js"></script>
<script src="js/validate.js"></script>
<script>
  $('#password, #passwordC').on('keyup', function () {
       if ($('#password').val() == $('#passwordC').val()) {
       $('#message').html('Validacion de password').css('color', 'green');
  } else
    $('#message').html('Verifica bien tu password no coincide').css('color', 'red');
});
</script>
</body>
</html>
