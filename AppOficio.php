<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  include 'includes/Acciones.php';
  // validar restriccion solo a sistemas
  $validar = $user['TUser'];
  if($validar != 1){
    header("location:app.php");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulo de Oficios | Sistemas-IscjlchavezG</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
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
    <div class="mt-2">
       <div class="row py-3 mt-3">
            <h4 class="text-center display-6"> Modulo Oficios</h4>
            <div class="row my-3">
         <div class="col-sm-6 col-md-6 col-lg-6"></div>
       <?php echo $Alert; ?>
       </div>
       </div>
       <div class="row py-1 mt-2">
           <div class="col-sm-4 col-md-4 col-lg-4 my-2">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi" width="33" height="33" fill="currentColor">
                                 <use xlink:href="app/icons/bootstrap-icons.svg#search"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                           <a href="AppBuscarOficioS.php" class="text-decoration-none text-secondary"><strong>Buscar</strong></a>
                           </div>
                       </div>
                   </div>
              </div>
           </div> 
           <div class="col-sm-4 col-md-4 col-lg-4 my-2">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi" width="33" height="33" fill="currentColor">
                                 <use xlink:href="app/icons/bootstrap-icons.svg#clipboard-plus"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                               <a href="AppRegistroOficio.php" class="text-decoration-none text-secondary"><strong>Agregar</strong></a>
                           </div>
                       </div>
                   </div>
              </div>
           </div> 
           <div class="col-sm-4 col-md-4 col-lg-4 my-2">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi" width="33" height="33" fill="currentColor">
                                 <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                              <a href="AppAdminOficios.php" class="text-decoration-none text-secondary"><strong>Administrar</strong></a>
                           </div>
                       </div>
                   </div>
              </div>
           </div> 
       </div> 
    </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
  <!-- termina contenido -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  <script src="js/pace.js"></script>
  </body>
</html>

