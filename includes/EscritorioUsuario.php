<?php include 'includes/slider_Escritorio.php'; ?>
<!-- inicia dasboard sistemas -->
<div class="row text-center mt-2">
   <!-- inicia tarjeta de dasboard -->
   <!-- inicia tarjeta de dasboard -->
   <div class="col-sm-6 col-md-6 col-lg-6 py-2">
      <div class="card shadow bg-light container">
         <div class="row">
            <div class="col py-3">
               <svg class="bi text-success" width="35" height="35" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-check" />
               </svg>
               <div class="py-1">
                  <span class="fw-lighter me-2 text-center"> Solicitudes</span>
               </div>
            </div>
            <div class="col py-4 ms-2">
               <strong class="fs-2"> <?php echo $Tsolicitudes; ?></strong>
            </div>
         </div>
      </div>
   </div>
   <!-- termina tarjeta -->
   <!-- inicia tarjeta de dasboard -->
   <div class="col-sm-6 col-md-6 col-lg-6 py-2">
      <div class="card shadow bg-light container">
         <div class="row">
            <div class="col py-3">
               <svg class="bi text-danger" width="35" height="35" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-x" />
               </svg>
               <div class="py-1">
                  <span class="fw-lighter me-2 text-center"> Cancelación</span>
               </div>
            </div>
            <div class="col py-4 ms-2">
               <strong class="fs-2"> <?php echo $Tcancelaciones; ?></strong>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row text-center">
   <!-- inicia tarjeta de dasboard -->
   <div class="col-sm-6 col-md-6 col-lg-6 py-2">
      <div class="card shadow bg-light container">
         <div class="row">
            <div class="col py-3">
               <svg class="bi text-info" width="35" height="35" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#person-check-fill" />
               </svg>
               <div class="py-1">
                  <span class="fw-lighter me-2 text-center"> Usuarios Online</span>
               </div>
            </div>
            <div class="col py-4 ms-2">
               <strong class="fs-2"> <?php echo $TOnlineUsuarios; ?></strong>
            </div>
         </div>
      </div>
   </div>
   <!-- termina tarjeta -->
   <!-- inicia tarjeta de dasboard -->
   <div class="col-sm-6 col-md-6 col-lg-6 py-2">
      <div class="card shadow bg-light container">
         <div class="row">
            <div class="col py-3">
               <svg class="bi text-warning" width="35" height="35" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#person-bounding-box" />
               </svg>
               <div class="py-1">
                  <span class="fw-lighter me-2 text-center"> Tipo de Usuario</span>
               </div>
            </div>
            <div class="col py-4 ms-2">
               <strong class="fs-5"><?php echo $separar['AppTuser']; ?> </strong>
            </div>
         </div>
      </div>
   </div>
   <!-- termina tarjeta -->
   <!-- termina dasboard sistemas-->
   <div class="mt-2">
      <!-- inicia dasboard sistemas -->
      <div class="row text-center">
         <!-- inicia tarjeta de dasboard -->
         <div class="col-sm-4 col-md-4 col-lg-4 py-2">
            <div class="card shadow bg-light container">
               <div class="row">
                  <div class="col py-3">
                     <svg class="bi text-secondary" width="35" height="35" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#inboxes-fill" />
                     </svg>
                     <div class="py-1">
                        <span class="fw-lighter me-2 text-center">Tickets</span>
                     </div>
                  </div>
                  <div class="col py-4 ms-2">
                     <strong class="fs-2"><?php echo $Ttickets; ?> </strong>
                  </div>
               </div>
            </div>
         </div>
         <!-- termina tarjeta -->
         <!-- inicia tarjeta de dasboard -->
         <div class="col-sm-4 col-md-4 col-lg-4 py-2">
            <div class="card shadow bg-light container">
               <div class="row">
                  <div class="col py-3">
                     <svg class="bi text-primary" width="35" height="35" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#calendar-day-fill" />
                     </svg>
                     <div class="py-1">
                        <? $fecha = date('d-m-Y'); ?>
                        <span class="fw-lighter me-2 text-center">Fecha: </span>
                     </div>
                  </div>
                  <div class="col py-4 ms-2">
                     <span class="fs-7"><?php echo $fecha; ?></span>
                  </div>
               </div>
            </div>
         </div>
         <!-- termina tarjeta -->
         <!-- inicia tarjeta de dasboard -->
         <div class="col-sm-4 col-md-4 col-lg-4 py-2">
            <div class="card shadow bg-light container">
               <div class="row">
                  <div class="col py-3">
                     <svg class="bi text-info" width="35" height="35" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#alarm-fill" />
                     </svg>
                     <div class="py-1">
                        <span class="fw-lighter me-2 text-center"> Hora:</span>
                     </div>
                  </div>
                  <div class="col py-4 ms-2">
                     <strong class="fs-2"> </strong>
                  </div>
               </div>
            </div>
         </div>
      </div>



   </div>