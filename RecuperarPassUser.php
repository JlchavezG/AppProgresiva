<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                     <use xlink:href="app/icons/bootstrap-icons.svg#arrow-left-circle-fill"/>
                </svg> Regresar
                </a>
        </div>
         <div class="col-sm-6 col-md-6 col-lg-6 mt-3">
         <a href="#" class="text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#AyudaPass" aria-controls="AyudaPass">
                <svg class="bi text-warning" width="20" height="20" fill="currentColor">
                     <use xlink:href="app/icons/bootstrap-icons.svg#lightbulb"/>
                </svg> Ayuda
                </a>
         </div>
    </div>
    <div class="row justify-content-center h-100 py-4">
        <div class="card shadow">
              <span class="text-muted text-center mt-3"> Ingresa tu nombre de usuario junto con tu email registrado</span><hr>
              <div class="row container justify-content-center">
              <div class="col-sm-8 col-md-8 col-lg-8">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post" autocomplete="off">
                   <div class="py-2">
                       <input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
                   </div>
                   <div class="py-2">
                       <input type="email" name="email" placeholder="Email" class="form-control" required>
                   </div>
                   <div class="py-2 d-grid gap-2">
                       <input type="submit" name="buscar" value="Buscar" class="btn btn-sm btn-success bg-gradient">
                   </div>
                  </form>
              </div>
              </div>        
        </div>
    </div>
</div>
<!-- offcanba ayuda -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="AyudaPass" aria-labelledby="AyudaPass">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Ayuda Recuperación de Password</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h3> Ayuda</h3>
  </div>
  
<!-- termina offcanva -->
<script src="js/bootstrap.min.js"></script>
<script src="js/pace.js"></script>    
</body>
</html>