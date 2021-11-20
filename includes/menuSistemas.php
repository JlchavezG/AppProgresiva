<div class="d-flex" id="wrapper">
  <!-- Sidebar iscjlchavez -->
  <!-- sidebar para el usuario de sistemas -->
  <div class="bg-light text-dark ms-1" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
       <img src="img/Logo_iscjlchavez-craken.png" style="width:180px;" alt="Logo-iscjlchavezG">
    </div>
    <div class="list-group list-group-flush">
        <span class="list-group-item list-group-item-action bg-light icon-desktop"> Menu Sistemas</span>
      <a href="dasboarduser.php" class="list-group-item list-group-item-action bg-light"><span class="icon-gauge"></span> Dashboard</a>
      <a href="#UserSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light"><span class="icon-users"></span> Usuarios</a>
        <ul class="collapse badge-dark" id="UserSubmenu">
          <li class="list-group-item list-group-item-action">
             <a href="acciones.php" class="text-decoration-none text-secondary"><span class="icon-cog-alt"></span> Administrar</a>
          </li>
           <li class="list-group-item list-group-item-action">
              <a href="#" class="text-decoration-none text-secondary"><span class="icon-search"></span> Buscar Usuarios</a>
           </li>
           <li class="list-group-item list-group-item-action">
              <a href="#" class="text-decoration-none text-secondary"><span class="icon-doc-inv"></span> Reportes</a>
           </li>
        </ul>
        <a href="#AlumnosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light"><span class="icon-graduation-cap"></span> Alumnos</a>
          <ul class="collapse badge-dark" id="AlumnosSubmenu">
            <li class="list-group-item list-group-item-action">
               <a href="#" class="text-decoration-none text-secondary"><span class="icon-user-add"></span> Agregar</a>
            </li>
             <li class="list-group-item list-group-item-action">
                <a href="#" class="text-decoration-none text-secondary"><span class="icon-cog"></span> Acciones</a>
             </li>
          </ul>
      <a href="#" class="list-group-item list-group-item-action bg-light"><span class="icon-clipboard"></span> Admin Dies</a>
      <a href="plantilla.php" class="list-group-item list-group-item-action bg-light"><span class="icon-location"></span> TravelSchool</a>
      <a href="#" class="list-group-item list-group-item-action bg-light"><span class="icon-th-thumb"></span> PlaySchool</a>
      <a href="notificaciones.php" class="list-group-item list-group-item-action bg-light"><span class="icon-comment"></span> Notificaciones</a>
      <a href="#" class="list-group-item list-group-item-action bg-light" data-toggle="modal" data-target="#ModalAcerca"><span class="icon-attention-alt-1"></span> Acerca de</a>
    </div>
  </div>
