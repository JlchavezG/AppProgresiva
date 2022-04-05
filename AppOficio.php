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
    if($Tsidebar == 1){include 'includes/SidebarSistemas.php';}else if($Tsidebar == 2){include 'includes/SidebarSoporte.php';}
    else if($Tsidebar == 3){include 'includes/SidebarOfertante.php';}else if($Tsidebar == 4){include 'includes/SidebarUsuario.php';}
  ?>
  <!-- termina sidebar -->
  <!-- inicia contenido -->
  <div class="container pt-4 mt-5">
    <div class="mt-2">
       <div class="row py-3 mt-3">
            <h4 class="text-center display-6"> Modulo Oficios</h4>
            <?php echo $Alert; ?>
       </div>
       <div class="row py-1 mt-2">
           <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi" width="33" height="33" fill="currentColor">
                                 <use xlink:href="app/icons/bootstrap-icons.svg#search"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                               <strong>Buscar</strong> Oficios
                           </div>
                       </div>
                   </div>
              </div>
           </div> 
           <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi" width="33" height="33" fill="currentColor">
                                 <use xlink:href="app/icons/bootstrap-icons.svg#clipboard-plus"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                               <strong>Buscar</strong> Oficios
                           </div>
                       </div>
                   </div>
              </div>
           </div> 
           <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi" width="33" height="33" fill="currentColor">
                                 <use xlink:href="app/icons/bootstrap-icons.svg#search"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                               <strong>Buscar</strong> Oficios
                           </div>
                       </div>
                   </div>
              </div>
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

