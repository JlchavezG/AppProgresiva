<?php
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
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <script scr="js/jquery.js"></script>
  </head>
  <body>
  <!-- navbar -->
  <?php include 'includes/navbar.php'; ?>
  <!-- inicia sidebar -->
  <?php include 'includes/SidebarSistemas.php';
  ?>
  <!-- termina sidebar -->
  <!-- inicia contenido -->
  <div class="container pt-4">
    <div class="mt-2">
      <!-- inicia dasboard sistemas -->
       <div class="row text-center">
         <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
             <div class="card shadow bg-light">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#person-circle"/> 
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Usuarios</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> <?php echo $Tusuarios; ?></strong></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
          <div class="card shadow bg-light">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#briefcase-fill"/> 
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Ofertantes</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> <?php echo $Tsocios; ?></strong></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
          <div class="card shadow bg-light">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#clipboard-check"/> 
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Solicitudes</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> <?php echo $Tsolicitudes; ?></strong></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
          <div class="card shadow bg-light">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#clipboard-x"/> 
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Cancelación</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> <?php echo $Tcancelaciones; ?></strong></div>
                </div>
             </div>
          </div>
       </div>
       <div class="row text-center">
         <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-6 col-md-6 col-lg-6 py-2">
             <div class="card shadow bg-light">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#person-circle"/> 
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> % de Calificaciones</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> <?php echo $Tusuarios; ?></strong></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-6 col-md-6 col-lg-6 py-2">
          <div class="card shadow bg-light">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#calendar-day-fill"/> 
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Fecha y Hora</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> <?php echo $Tsocios; ?></strong></div>
                </div>
             </div>
          </div>
       <!-- termina tarjeta -->
       <!-- termina dasboard sistemas-->
       </div>
  </div>
</div>
  <!-- termina contenido -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  </body>
</html>
