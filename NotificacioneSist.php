<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  include 'includes/Acciones.php';
  $validar = $user['TUser'];
  if($validar != 1 || $validar == 2){
    header("location:app.php");
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
      <h2 class="text-center mt-4 display-6 text-warning"> Mensajes 
        <svg class="bi text-secondary" width="30" height="30" fill="currentColor">
            <use xlink:href="library/icons/bootstrap-icons.svg#envelope"/>
        </svg></h2>
        <div class="container mt-3">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="row mt-2 text-center">
              <div class="col py-2">
                  <a href="appOficio.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="35" height="35" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                  </svg> Salir </a>
               </div>
               <div class="col"></div>
            </div>
                <div class="row  mt-5">
                    <div class="col-sm-12 col-md-12 col-lg-12 justify-content-center">
                      <div class="text-justify">
                         <p><svg class="bi" width="15" height="15" fill="currentColor">
                               <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/>
                            </svg>  Ingresa el titulo y mensaje para los usuarios de la plataforma</p>
                       </div>
                        <div class="form-floating">
                         <input type="text" class="form-control bg-light" placeholder="Titulo de la Notificacion" id="floatingTitulo" name="TituloNoti" required>
                          <label for="floatingTitulo">Titulo:</label>
                        </div>
                        <div class="form-floating mt-2">
                          <textarea class="form-control bg-light" placeholder="Mensaje a enviar" id="floatingTextarea" name="MensajeNoti" required></textarea>
                          <label for="floatingTextarea">Mensaje:</label>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                          <input type="submit" name="NotiUsers" class="btn btn-sm btn-primary bg-gradient rounded-pill" value="Enviar Notificación">
                        </div>
                      </div>
                  </div>
             </form>
         </div>
   </div>
   <div class="row mt-3">
     <div class="col-sm-12 col-md-12 col-lg-12">
         <?php if($Ej->num_rows > 0) { ?>
          <div class="card shadow">
             <div class="card-header bg-light"> 
               <svg class="bi" width="20" height="20" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#envelope-fill"/> 
               </svg> &nbsp; Tus Mensajes Globales</div>
             <div class="card-body bg-light">
                <div class="Container">
                   <div class="table-responsive"> 
                    <table class="table table-sm">
                      <thead class="text-center bg-light">
                        <tr>
                          <th scope="col">Titulo</th>
                          <th scope="col">MensajeDeNotificación</th>
                          <th scope="col">FechaDeEmición</th>
                          <th scope="col">Horario</th>
                          <th scope="col">Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php while($Lineas = $Ej->fetch_assoc()) { ?>
                        <tr class="bg-light">
                          <td scope="col"><?php echo $Lineas['TituloN']; ?></td>
                          <td scope="col"><?php echo $Lineas['MensajeN']; ?></td>
                          <?php $fedit = $Lineas['FechaN'];
                          $fedit = date('d-m-Y'); ?>
                          <td scope="col"><?php echo $fedit; ?></td>
                          <td scope="col"><?php echo $Lineas['HoraN']; ?></td>
                          <td scope="col text-center">
                             <a href="includes/EliminarMensaje.php?Id_Mensajes=<?php echo $Lineas['Id_Mensajes'] ?>">
                                <svg class="bi text-danger" width="20" height="20" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#trash-fill"/>
                                </svg>                     
                             </a>
                          </td>
                        </tr>
                        <?php } ?>
                     </tbody>
                    </table>
                    </div>
                </div>
             </div>
         </div>
     </div>
     <?php } else {?>
       <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Aun no hay mensajes!</strong> No tienes Mensajes de los Administradores de la plataforma.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
      <?php } ?>
   </div>
</div>         
   <?php echo $NotificaPuhs; ?>
<?php include 'includes/footer.php'; ?>   
<!-- termina contenido -->
<script src="js/bootstrap.min.js"></script>
<script src="js/dark-mode.js"></script>
<script src="js/pace.js"></script>
</body>
</html>

