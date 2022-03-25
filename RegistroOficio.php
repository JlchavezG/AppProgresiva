<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
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
       </div>
       <div class="row">
           <form action="">
               <input type="text" name="NOficio" id="Noficio" placeholder="Nombre del Oficio" class="form-control" required>
               <textarea name="DescOficio" id="DescOficio" placeholder="Descripción del Oficio" cols="30" rows="3" class="form-control mt-3" required></textarea>
               <div class="d-grid gap-2 mt-2">
                   <input type="submit" value="Registrar Oficio" name="ROficio" class="btn btn-sm btn-success">
               </div>   
           </form>
       </div>
       <div class="row py-1 mt-2">
           <div class="card shadow bg-light">
              <p class="text-center mt-2">Registro de Oficios en la plataforma</p>
               <table class="table table-striped table-hover">
                 <thead>
                   <tr>
                     <th scope="col">Nombre</th>
                     <th scope="col">Descripción</th>
                   </tr>
                 </thead>
                 <tbody>
                     <?php while($Oficios = $ROficio->fetch_assoc()){ ?>
                      <tr>
                        <td><?php echo $Oficios['NombreOf'];?></td>
                        <td><?php echo $Oficios['Descripcion'];?></td>
                      </tr>
                     <?php } ?>
                 </tbody> 
               </table>
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

