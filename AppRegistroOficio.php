<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  include 'includes/Acciones.php';
  // validar restriccion solo a sistemas
  $validar = $user['TUser'];
  if($validar != 1 || $validar == 2){
    header("location:app.php");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Oficios | Sistemas-IscjlchavezG</title>
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
    if($Tsidebar == 1){include 'includes/SidebarSistemas.php';}else if($Tsidebar == 2){include 'includes/SidebarSoporte.php';}
    else if($Tsidebar == 3){include 'includes/SidebarOfertante.php';}else if($Tsidebar == 4){include 'includes/SidebarUsuario.php';}
  ?>
  <!-- termina sidebar -->
  <!-- inicia contenido -->
  <div class="container pt-4 mt-5">
    <div class="mt-2">
       <div class="row py-3 mt-3">
            <h4 class="text-center display-6"> Registro de | <span class="text-warning">Oficios</span></h4>
          <div class="row mt-2 text-center">
          <div class="col py-2">
                <a href="appOficio.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-left-circle-fill"/>
                </svg> Regresar </a>
          </div>
    <div class="col"></div>
    </div>
    <div class="row container">
        <span class="text-secundary text-center">Ingresa el Nombre y descripción del oficio a registrar.</span>
    </div>    
    <div class="row my-3">
    <div class="col-sm-4 col-md-4 col-lg-4"></div>
       <?php echo $Alert; ?>
       </div>
       <div class="row justify-content-center">
         <div class="col-lg-10">
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
               <input type="text" name="NOficio" id="Noficio" placeholder="Nombre del Oficio" class="form-control" required>
               <textarea name="DescOficio" id="DescOficio" placeholder="Descripción del Oficio" cols="30" rows="3" class="form-control mt-3" required></textarea>
               <div class="d-grid gap-2 mt-2">
                   <input type="submit" value="Registrar Oficio" name="Oficio" class="btn btn-sm btn-success">
               </div>  
            </div>   
           </form>
       </div>
         <!-- termina contenido -->
  <?php include 'includes/footer.php'; ?>       
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  <script src="js/pace.js"></script>
  </body>
</html>

