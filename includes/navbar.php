<nav class="navbar shadow navbar-light bg-light navbar-expand-lg fixed-top">
<div class="container-fluid mx-5">
   <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="text-decoration-none">
    <svg class="bi" width="20" height="20" fill="currentColor">
       <use xlink:href="app/icons/bootstrap-icons.svg#grid-fill"/>
    </svg> <span class="text-dark"> Menu</span>
  </a>
  <ul class="navbar-nav my-lg-0">
    <li class="nav-item py-2">
      <?php echo $usuario; ?>&nbsp;<img src="img/user/yo.jpeg" alt="perfil" style="width:30px; border-radius:50%;">
    </li>
    <li class="nav-item py-2">
      &nbsp;&nbsp;
      <a href="#" data-bs-toggle="modal" data-bs-target="#ModalCerrar"><svg class="bi" width="20" height="20" fill="currentColor">
         <use xlink:href="app/icons/bootstrap-icons.svg#door-open-fill"/>
      </svg></a>
    </li>
  </ul>
</div>
</nav>
<!-- modal cerrar sesion -->
<div class="modal fade" id="ModalCerrar" tabindex="-1" aria-labelledby="ModalCerrar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalCerrarLabel">Cerrar Sesion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <!-- imagen del perfil -->
        </div>
        <span><?php echo $usuario; ?>&nbsp; ¿Deceas salir de tu sesión actual?</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancelar</button>
        <a href="includes/CerrarS.php" class="btn btn-sm btn-success">Salir</a>
      </div>
    </div>
  </div>
</div>
