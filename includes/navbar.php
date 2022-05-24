<!-- inicia navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgba(0,0,0,.5);">
  <div class="container-fluid">
    <a class="navbar-brand" href="app.php">
      <img src="img/craken.png" alt="logo iscjlchavezg" style="width:50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="text-decoration-none">
              <svg class="bi" width="25" height="25" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#box-arrow-in-right"/> 
              </svg> Menu
          </a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> &nbsp;
            <svg class="bi" width="20" height="20" fill="currentColor">
               <use xlink:href="library/icons/bootstrap-icons.svg#plus-circle-fill"/> 
            </svg>&nbsp; Nueva Solicitud
          </a>
        </li>
        &nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
        <div class="form-check form-switch nav-link">
                  <input class="form-check-input" type="checkbox" id="darkSwitch">
                  <label class="form-check-label" for="darkSwitch">
                  <span>
                  <svg class="bi" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low"/> 
                  </svg> |
                  <svg class="bi" width="16" height="16" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars"/> 
                  </svg>
                  </span>
                  </label>
               </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Soporte"> &nbsp;
            <svg class="bi" width="20" height="20" fill="currentColor">
               <use xlink:href="library/icons/bootstrap-icons.svg#headset"/> 
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#Soporte1">
            <svg class="bi" width="20" height="20" fill="currentColor">
               <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill"/> 
            </svg>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hola: <?php echo $user['Nombre']; ?> &nbsp;&nbsp;<img src="img/user/<?php echo $user['Imagen']; ?>" alt="Imagen Perfil" style="width:30px; border-radius:50%;">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="Appperfil.php">
               <svg class="bi" width="20" height="20" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#person-square"/> 
               </svg> &nbsp; Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#CSesion">
            <svg class="bi" width="20" height="20" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#power"/> 
               </svg> &nbsp;Cerrar Sesión</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> &nbsp;
                <svg class='bi' width='20' height='20' fill='currentColor'>
                  <use xlink:href='library/icons/bootstrap-icons.svg#envelope-fill'/> 
                </svg>
            <?php error_reporting(0); if($Tnotificaciones > 0){
                $notifica.= "<span class='badge rounded-pill position-absolute start-10 top-70 bg-danger'>$Tnotificaciones</span>";    
                echo $notifica; ?>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgba(255,255,255,.5);">
              <?php while($linea = $notificaciones->fetch_array()){  ?>  
                 <li><a class="dropdown-item" href="includes/LeerNotifica.php?Id_Mensajes=<?php echo $linea['Id_Mensajes']; ?>"><?php echo $linea['TituloN']; ?></a></li>
                 <li><hr class="dropdown-divider"></li>
               <?php } ?>
          </ul>
          <?php  }  ?>
        </li>  
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> 
              <svg class='bi' width='20' height='20' fill='currentColor'>
                <use xlink:href='library/icons/bootstrap-icons.svg#bell-fill'/> 
              </svg>
          </a>
        </li>         
      </ul>  
    </div>
  </div>
</nav>
<!-- termina navbar -->
<!-- Modal Cerrar sesion-->
<div class="modal fade" id="CSesion" tabindex="-1" aria-labelledby="CSesionLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel"><?php echo $user['Nombre']; ?> ¿Deceas cerrar Sesión?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container text-center mb-2">
           <img src="img/user/<?php echo $user['Imagen']; ?>" alt="perfil" style="width:90px; border-radius:50%;" >
        </div>
        <span class="text-center py-4 "> ¿Estas seguro de queres salir de la plataforma y cerrar tu sesión?</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a href="includes/CerrarS.php" class="btn btn-sm btn-danger">
          <svg class="bi" width="20" height="20" fill="currentColor">
               <use xlink:href="library/icons/bootstrap-icons.svg#power"/> 
          </svg> Cerrar Sesión</a>
      </div>
    </div>
  </div>
</div>
<!-- termina modal de cerrar sesion -->
<!-- inicia modal para soporte tecnico -->
<div class="modal fade" id="Soporte" tabindex="-1" aria-labelledby="SoporteLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered bg-ligth">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="calendarioLabel">Contacta con Soporte tecnico</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container text-center mb-2">
           <div class="row">
                <div class="col">
                  <a href="mailto:sopoarte@iscjoseluischavezg.mx" class="text-decoration-none link-secondary">
                    <svg class="bi" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#mailbox2"/> 
                  </svg> &nbsp;Contacto via Email</a>
                </div>
                <div class="col">
                  <a href="tel:5611099054" class="text-decoration-none link-secondary">
                  <svg class="bi" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#telephone-forward-fill"/> 
                  </svg> &nbsp; Contacto via Telefonica</a>
                </div>
           </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>