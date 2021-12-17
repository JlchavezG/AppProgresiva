
<!-- inicia navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#F3F1F1;">
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
                  <use xlink:href="app/icons/bootstrap-icons.svg#box-arrow-in-right"/> 
              </svg> Menu
          </a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
       
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> &nbsp; &nbsp; Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bienvenido: <?php echo $user['Nombre']; ?> <img src="img/user/<?php echo $user['Imagen']; ?>" alt="Imagen Perfil" style="width:30px; border-radius:50%;">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li class="dropdown-item">
               <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="darkSwitch">
                  <label class="form-check-label" for="darkSwitch">
                  <span>
                  <svg class="bi" width="20" height="20" fill="currentColor">
                     <use xlink:href="app/icons/bootstrap-icons.svg#brightness-low"/> 
                  </svg> |
                  <svg class="bi" width="16" height="16" fill="currentColor">
                     <use xlink:href="app/icons/bootstrap-icons.svg#moon-stars"/> 
                  </svg>
                  </span>
                  </label>
               </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>  
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-dark btn-sm" type="submit">
            <svg class="bi" width="15" height="15" fill="currentColor">
               <use xlink:href="app/icons/bootstrap-icons.svg#search"/> 
            </svg> 
        </button>
      </form>
    </div>
  </div>
</nav>
