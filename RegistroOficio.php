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
    <title>Inicio de Sistema | IscjlchavezG</title>
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
            <h4 class="text-center display-6">Registro de Oficios</h4>
            <?php echo $Alert; ?>
       </div>
       <div class="row">
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
               <input type="text" name="NOficio" id="Noficio" placeholder="Nombre del Oficio" class="form-control" required>
               <textarea name="DescOficio" id="DescOficio" placeholder="Descripción del Oficio" cols="30" rows="3" class="form-control mt-3" required></textarea>
               <div class="d-grid gap-2 mt-2">
                   <input type="submit" value="Registrar Oficio" name="Oficio" class="btn btn-sm btn-success">
               </div>   
           </form>
       </div>
       <div class="row py-1 mt-2">
           <div class="card shadow bg-light">
              <div class="row mt-2">
                    <div class="col-sm-6 col-md-6 col-lg-6"><p class="text-center mt-2">Registro de Oficios en la plataforma</p></div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                    
                        <form action="">
                        <div class="input-group mb-3">
                             <input type="text" class="form-control" name="busqueda" placeholder="Buscar por nombre de Oficio" aria-label="Buscar" aria-describedby="button-addon2">
                             <input type="submit" class="btn btn-outline-success" name="Buscar"  value="Buscar">
                        </div>
                        </form>
                    </div>
              </div>
           </div> 
           <div class="row py-2 mt-2">
             
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

