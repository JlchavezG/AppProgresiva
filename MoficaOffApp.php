<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  if(!isset($_GET)){
      header("location:AppAdminOficios.php");
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
    if($Tsidebar == 1){include 'includes/SidebarSuperUser.php';}else if($Tsidebar == 2){include 'includes/SidebarGerente.php';}
    else if($Tsidebar == 3){include 'includes/SidebarSocioP.php';}else if($Tsidebar == 4){include 'includes/SidebarUsuarioP.php';}
    else if($Tsidebar == 5){include 'includes/SidebarSocioF.php';}else if($Tsidebar == 6){include 'includes/SidebarUsuarioF.php';}
  ?>
  <!-- termina sidebar -->
  <!-- inicia contenido -->
  <div class="container pt-4 mt-5">
    <div class="mt-2">
      <div class="container mt-4">
             <div class="row">
                 <h2 class="text-center display-6"> Moficación de datos de Oficio</h2>
             </div>
             <div class="row mt-2 text-center">
               <?php echo  $Alert; ?>
                 <div class="col py-2">
                     <a href="AppAdminOficios.php" class="text-decoration-none text-muted">
                        <svg class="bi text-danger" width="20" height="20" fill="currentColor">
                          <use xlink:href="app/icons/bootstrap-icons.svg#door-open-fill"/>
                        </svg> Cancelar</a>
                </div>
                <div class="col"></div>
             </div>
             <div class="row-mt-3">
                  <div class="container">
                      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                         <input type="hidden" name="Id_Ofcio" value="<?php echo $separarOf['Id_Oficio']; ?>">
                         <div class="mt-2">
                            <input type="text" name="NameOficio" value="<?php echo $separarOf['NombreOf']; ?>" class="form-control">
                         </div>
                         <div class="mt-2">
                             <textarea name="DescOficio" cols="30" rows="5" class="form-control"><?php echo $separarOf['Descripcion']; ?> </textarea>
                         </div>
                         <div class="mt-2 text-end">
                           <input type="submit" name="Btn_Moficio" class="btn btn-sm btn-success" value="Modificar Datos">
                         </div>
                      </form>    
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

