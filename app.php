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
  <?php $Tsidebar = $user['TUser'];
    if($Tsidebar == 1){include 'includes/Slider_SpUsuario.php';}else if($Tsidebar == 2){include 'includes/Slider_SpUsuario.php';}
    else if($Tsidebar == 3){include 'includes/SliderSocioP.php';}else if($Tsidebar == 4){include 'includes/SliderUsuarioP.php';}
    else if($Tsidebar == 5){include 'includes/SliderSFree.php';}else if($Tsidebar == 6){include 'includes/SliderUsuarioFree.php';}
  ?>  
    <div class="mt-2">
    <?php 
    $TsEscritorio = $user['TUser'];
    if($TsEscritorio == 1){include 'includes/EscritorioSuperUser.php';}else if($TsEscritorio == 2){include 'includes/EscritorioSoporte.php';}
    else if($TsEscritorio == 3){include 'includes/EscritorioSocioPremium.php';}else if($TsEscritorio == 4){include 'includes/EscritorioUsuario.php';} else if($TsEscritorio == 5){ include 'includes/EscritorioSocioFree.php';}
    ?>
  </div>
</div>
<?php include 'includes/footer.php'; ?>
  <!-- termina contenido -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  <script src="js/pace.js"></script>
  <script src="js/action.js"></script>
  </body>
</html>
