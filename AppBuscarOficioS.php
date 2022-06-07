<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  include 'includes/Acciones.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sistema | IscjlchavezG</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <script src="library/push/push.min.js"></script>
    <script scr="js/jquery.js"></script>
  </head>
  <body>
  <!-- navbar -->
  <?php include 'includes/navbar.php'; ?>
  <!-- inicia sidebar -->
  <?php 
   $Tsidebar = $user['TUser'];
    if($Tsidebar == 1){include 'includes/SidebarSuperUser.php';}else if($Tsidebar == 2){include 'includes/SidebarGerente.php';}
    else if($Tsidebar == 3){include 'includes/SidebarSocioP.php';}else if($Tsidebar == 4){include 'includes/SidebarUsuarioP.php';}
    else if($Tsidebar == 5){include 'includes/SidebarSocioF.php';}else if($Tsidebar == 6){include 'includes/SidebarUsuarioF.php';}
  ?>
  <!-- termina sidebar -->
  <!-- inicia contenido -->
  <div class="container pt-4 mt-5">
    <div class="justify-content-center mt-3">
        <h2 class="display-6 text-center">Buscar Oficios</h2>
        <div class="row my-3">
         <div class="col-sm-4 col-md-4 col-lg-4"></div>
    </div>  
    <div class="row mt-2 text-center">
          <div class="col py-2">
                <a href="appOficio.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                </svg> Salir </a>
          </div>
    <div class="col"></div>
    </div>      
    <div class="mt-2">
        <div class="row py-1 mt-2">
             <div class="card shadow bg-light mt-3">
                 <div class="row mt-2">
                    <div class="col-sm-6 col-md-6 col-lg-6"><p class="text-center mt-2">Registros de Oficios en la plataforma:</p></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                    <form action="<?php echo $_SERVER[''] ?>" method="POST">
                        <div class="input-group mb-3">
                             <input type="text" class="form-control" name="Buscar" placeholder="Buscar Oficio" aria-label="Buscar Oficio" aria-describedby="Buscar Oficio" required>
                             <button class="btn btn-outline-success" type="submit" name="Busqueda" id="Buscar">Buscar</button>
                        </div>
                    </div>
                    </form>
              </div>
           </div> 
           <div class="row py-2 mt-2">
               <?php echo $tabla; ?>
           </div>
           
       </div>
  </div>
</div>
</div>
<!-- termina contenido -->
<script src="js/bootstrap.min.js"></script>
<script src="js/dark-mode.js"></script>
<script src="js/pace.js"></script>
</body>
</html>

