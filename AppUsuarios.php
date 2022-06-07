<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  include 'includes/Acciones.php';
  // validar restriccion solo a sistemas
  $validar = $user['TUser'];
  if($validar != 1 || $validar == 2){
    header("location:library.php");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulo de Usuarios | Sistemas-IscjlchavezG</title>
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
    <div class="mt-2">
       <div class="row py-3 mt-3">
            <h4 class="text-center display-6"> Modulo Usuarios</h4>
            <div class="row my-3">
         <div class="col-sm-6 col-md-6 col-lg-6"></div>
       <?php echo $Alert; ?>
       </div>
       </div>
       <div class="row mt-2 text-center">
          <div class="col py-2">
                <a href="app.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="30" height="30" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                </svg> Salir </a>
          </div>
          <div class="col"></div>
       </div>  
       <div class="row mt-3">
         <span class="text-center">Total de Usuarios en la plataforma: <b><?php echo $TotalRow ; ?></b></span>
       </div>
       <div class="row py-1 mt-2 justify-content-center">
           <div class="col-sm-12 col-md-2 col-lg-2 my-2">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi text-primary" width="33" height="33" fill="currentColor">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#search"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                           <a href="AppBuscarUsuarios.php" class="text-decoration-none text-secondary"><strong>Buscar Usuarios</strong></a>
                           </div>
                       </div>
                   </div>
              </div>
           </div> 
           <div class="col-sm-12 col-md-2 col-lg-2 my-2">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi text-success" width="33" height="33" fill="currentColor">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-plus"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                               <a href="AppRegistroUsuarios.php" class="text-decoration-none text-secondary"><strong>Agregar Usuarios</strong></a>
                           </div>
                       </div>
                   </div>
              </div>
           </div> 
           <div class="col-sm-2 col-md-2 col-lg-2 my-2">
              <div class="card shadow bg-light">
                   <div class="container text-center">
                       <div class="row">
                           <div class="col my-3">
                               <svg class="bi text-info" width="33" height="33" fill="currentColor">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/>
                               </svg>
                           </div>
                           <div class="col my-3">
                              <a href="AppAdminUsuarios.php" class="text-decoration-none text-secondary"><strong>Administrar Usuarios</strong></a>
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

