<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
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
    <div class="mt-2"> 
      <div class="row mt-3 py-3">
      <?php while($LinkOficio = $ROficio->fetch_array()){ ?>  
          <div class="col-sm-3 col-md-3 col-lg-3 py-3">
              <a href="ListaSociosOficio.php?Id_Oficio=<?php echo $LinkOficio['Id_Oficio'];?>" class="text-decoration-none text-secondary">
                <div class="card shadow bg-light">
                  <div class="container text-center">
                     <div class="row py-3">
                        <svg class="bi" width="23" height="23" fill="currentColor">
                          <use xlink:href="library/icons/bootstrap-icons.svg#tools"/>
                         </svg>
                     </div>  
                     <div class="row">
                         <div class="text-center"><?php echo $LinkOficio['NombreOf']; ?></div>
                     </div> 
                  </div>
              </div>
          </div></a>
          <?php } ?>
      </div>
  </div>
</div>
  <!-- termina contenido -->
<?php include 'includes/footer.php';?>  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  <script src="js/pace.js"></script>
  </body>
</html>

