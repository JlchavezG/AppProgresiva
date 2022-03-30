<div class="">
   <div class="row my-4 rounded">
       <div id="carouselExampleFade" class="carousel slide carousel-fade rounded" data-bs-ride="carousel">
           <div class="carousel-inner">
              <div class="carousel-item active">
                 <img src="img/Slider1.png" class="d-block w-100 img-fluid rounded" alt="Slider1">
              </div>
              <div class="carousel-item">
                 <img src="img/Slider2.png" class="d-block w-100 img-fluid rounded" alt="Slider2">
              </div>
              <div class="carousel-item">
                 <img src="img/Slider3.png" class="d-block w-100 img-fluid rounded" alt="Slider3">
              </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
       </div>
   </div>
</div>
<!-- inicia dasboard sistemas -->
<div class="row text-center mt-2">
         <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
             <div class="card shadow bg-light container">
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
          <div class="card shadow bg-light container">
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
          <div class="card shadow bg-light container">
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
          <div class="card shadow bg-light container">
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
             <div class="card shadow bg-light container">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#person-check-fill"/>
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Usuarios Online</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> <?php echo $TOnlineUsuarios; ?></strong></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-6 col-md-6 col-lg-6 py-2">
          <div class="card shadow bg-light container">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#person-bounding-box"/>
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Tipo de Usuario</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-5"><?php echo $separar['AppTuser']; ?> </strong></div>
                </div>
             </div>
          </div>
       <!-- termina tarjeta -->
       <!-- termina dasboard sistemas-->
       <div class="mt-2">
      <!-- inicia dasboard sistemas -->
       <div class="row text-center">
         <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
             <div class="card shadow bg-light container">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#inboxes-fill"/>
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center">Tickets</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"><?php echo $Ttickets; ?> </strong></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
          <div class="card shadow bg-light container">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#hammer"/>
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Oficios</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"><?php echo $Toficios; ?> </strong></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
          <div class="card shadow bg-light container">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#calendar-day-fill"/>
                    </svg>
                    <div class="py-1">
                    <? $fecha = date('d-m-Y');?>   
                    <span class="fw-lighter me-2 text-center">Fecha: </span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <span class="fs-7"><?php echo $fecha; ?></span></div>
                </div>
             </div>
          </div>
          <!-- termina tarjeta -->
          <!-- inicia tarjeta de dasboard -->
          <div class="col-sm-3 col-md-3 col-lg-3 py-2">
          <div class="card shadow bg-light container">
                <div class="row">
                <div class="col py-3">
                    <svg class="bi" width="35" height="35" fill="currentColor">
                       <use xlink:href="app/icons/bootstrap-icons.svg#alarm-fill"/>
                    </svg>
                    <div class="py-1">
                    <span class="fw-lighter me-2 text-center"> Hora:</span>
                    </div>
                </div>
                <div class="col py-4 ms-2">
                  <strong class="fs-2"> </strong></div>
                </div>
             </div>
          </div>
       </div>



       </div>
