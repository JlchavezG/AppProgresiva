<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  include 'includes/Acciones.php';
  $validar = $user['TUser'];
  if($validar != 1 || $validar == 2){
    header("location:library.php");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Notificaciones | IscjlchavezG</title>
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
      <h2 class="text-center mt-4 display-6 text-muted"> Notificaciones</h2>
      <div class="container mt-3">
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row text-center mt-5">
                      <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center">
                          <div class="form-floating">
                             <textarea class="form-control" placeholder="Mensaje a enviar" id="floatingTextarea" name="MensajeNoti" required></textarea>
                             <label for="floatingTextarea">Mensaje:</label>
                           </div>
                           <div class="d-grid gap-2 mt-3">
                              <input type="submit" name="NotiUsers" class="btn btn-sm btn-success" value="Enviar Notificación">
                           </div>
                      </div>
                </div>
             </form>
      </div>
      <?php echo $NotificaPuhs; ?>
  </div>
</div>
<!-- termina contenido -->
<script src="js/bootstrap.min.js"></script>
<script src="js/dark-mode.js"></script>
<script src="js/pace.js"></script>
</body>
</html>

