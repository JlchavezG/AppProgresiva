<div class="offcanvas offcanvas-start  d-flex flex-column flex-shrink-0 p-3 bg-white" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="container text-center">
      <img src="img/user/<?php echo $separar['Imagen']; ?>" alt="" width="50" height="50" class="rounded-circle me-4">
      <span class="fs-4"><?php echo $separar['Nombre']; ?></span>
    </div>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item items">
      <a href="app.php" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#speedometer2"/>
      </svg>&nbsp; Dashboard</a>
    </li>
    <li class="nav-item items">
      <a href="appperfil.php" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#person-circle"/>
      </svg>&nbsp; Perfil</a>
    </li>
    <li class="nav-item items">
      <a href="AppBuscarOficioS.php" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#hammer"/>
      </svg>&nbsp;Buscar Oficios</a>
    </li>
    <li class="nav-item items">
      <a href="#" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-check"/>
      </svg>&nbsp; Nueva Solicitud</a>
    </li>
    <li class="nav-item items">
      <a href="Catalogo.php" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#hand-index"/>
      </svg>&nbsp; Catalogo de Oficios</a>
    </li>
    <li class="nav-item items">
      <a href="#" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#clipboard-check"/>
      </svg>&nbsp; Historial</a>
    </li>
    <li class="nav-item items">
      <a href="#" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#calendar2-date"/>
      </svg>&nbsp; Calendario</a>
    </li>
    <li class="nav-item items">
      <a href="NotificacionesUser.php" class="nav-link fuente"><svg class="bi" width="23" height="23" fill="currentColor">
         <use xlink:href="library/icons/bootstrap-icons.svg#mailbox2"/>
      </svg>&nbsp; Notificaciones</a>
    </li>
  </ul>
</div>
