<?php
 include 'includes/conection.php';
 include 'includes/querys.php';
 include 'includes/Confing.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil de Usuario | IscjlchavezG</title>
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
    if($Tsidebar == 1){
       include 'includes/SidebarSistemas.php';
    }
  ?>
  <!-- termina sidebar -->
  <!-- inicia contenido -->
  <div class="container pt-4 mt-5">
     <section id="Perfil">
         <div class="container py-3">
             <div class="row py-3">
                 <h4 class="text-secondary text-center">Perfil de usuario</h4>
             </div>
             <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-6">
                 <div class="text-center py-3">
                    <img src="img/user/<?php echo $separar['Imagen']?>" alt="Imagen de perfil" width="250px" height="250px" class="rounded-circle mt-3">  
                 </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="mt-5">
                    <ul class="list-group list-group-flush bg-light">
                       <li class="list-group-item bg-light"><strong>Nombre: </strong> <?php echo $separar['Nombre']; ?> <?php echo $separar['ApellidoP']; ?> <?php echo $separar['ApellidoM'];?></li>
                       <li class="list-group-item bg-light"><strong>Telefono:</strong> <?php echo $separar['Telefono']; ?></li>
                       <li class="list-group-item bg-light"><strong>Email: </strong> <?php echo $separar['Email']; ?></li>
                       <li class="list-group-item bg-light"><strong>Estado: </strong> <?php echo $separar['NombreE']; ?></li>
                       <li class="list-group-item bg-light"><strong>Municipio: </strong> <?php echo $separar['NombreM']; ?></li>
                       <li class="list-group-item bg-light"><strong>Tipo de Usuario:</strong> <?php echo $separar['AppTuser']; ?></li>
                       <li class="list-group-item bg-light"><strong>Cuenta:</strong> <?php echo $separar['NombreNivel']; ?></li>
                    </ul>
                    </div>
                    <div class="row py-2">
                        <div class="Container py-2 text-center">
                          <a href="#" class="text-decoration-none text-secondary ">
                          <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/>
                          </svg> Editar Perfil  
                          </a>  | 
                          <a href="#" class="text-decoration-none text-secondary ">
                          <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="app/icons/bootstrap-icons.svg#printer-fill"/>
                          </svg>  Imprimir Perfil
                          | 
                          <a href="#" class="text-decoration-none text-secondary ">
                          <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="app/icons/bootstrap-icons.svg#qr-code"/>
                          </svg>  Codigó QR
                        </div>
                    </div>
               </div>
             </div>
         </div>
     </section>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  <script src="js/pace.js"></script>
</body>
</html>