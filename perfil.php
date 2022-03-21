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
  if($Tsidebar == 1){include 'includes/SidebarSistemas.php';}else if($Tsidebar == 2){include 'includes/SidebarSoporte.php';}
  else if($Tsidebar == 3){include 'includes/SidebarOfertante.php';}else if($Tsidebar == 4){include 'includes/SidebarUsuario.php';}
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
               <div class="col-sm-12 col-md-12 col-lg-6">
                 <div class="text-center py-3">
                     <div class="ImgHover">
                       <img src="img/user/<?php echo $separar['Imagen']?>" alt="Imagen de perfil" width="250px" height="250px" class="rounded shadow mt-3 ">  
                     </div>
                     <div class="mt-2">
                       <div class="row mt-3">
                           <span class="text-center py-4">
                             <a href="#" data-bs-toggle="modal" data-bs-target="#ModificarPerfil" class="text-decoration-none text-secondary">
                                <svg class="bi" width="15" height="15" fill="currentColor">
                                  <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/> 
                                </svg> Editar Perfil</a> | <a href="" class="text-decoration-none text-secondary">
                                <svg class="bi" width="15" height="15" fill="currentColor">
                                  <use xlink:href="app/icons/bootstrap-icons.svg#printer-fill"/> 
                                </svg> Imprimir Perfil</a> | 
                            </span>
                       </div>
                    </div>
                  </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-6 mt-3">
                 <div class="mt-5">
                    <div class="accordion shadow" id="accordionPanelsStayOpenExample">
                       <div class="accordion-item">
                           <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                              <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Datos de Contacto
                              </button>
                           </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                         <div class="accordion-body">
                           <ul class="list-group list-group-flush bg-light">
                             <li class="list-group-item"><strong>Nombre: </strong> <?php echo $separar['Nombre']; ?> <?php echo $separar['ApellidoP']; ?> <?php echo $separar['ApellidoM'];?></li>
                             <li class="list-group-item"><strong>Telefono:</strong> <?php echo $separar['Telefono']; ?></li>
                             <li class="list-group-item"><strong>Email: </strong> <?php echo $separar['Email']; ?></li>
                           </ul>
                         </div>
                       </div>
                 </div>
                 <div class="accordion-item">
                       <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                         <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                           Dirección
                         </button>
                       </h2>
                       <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                          <div class="accordion-body">
                            <ul class="list-group list-group-flush bg-light">
                               <li class="list-group-item"><strong>Calle: </strong> <?php echo $separar['Calle']; ?></li>
                               <li class="list-group-item"><strong>Numero:</strong> <?php echo $separar['Numero']; ?></li>
                               <li class="list-group-item"><strong>Colonia: </strong> <?php echo $separar['Colonia']; ?></li>
                               <li class="list-group-item"><strong>Estado:</strong> <?php echo $separar['NombreE']; ?></li>
                               <li class="list-group-item"><strong>Municipio:</strong> <?php echo $separar['NombreM']; ?></li>
                            </ul>
                          </div>
                       </div>
                   </div>
                   <div class="accordion-item">
                      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                         <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                           Datos de la Cuenta
                         </button>
                       </h2>
                       <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                          <div class="accordion-body">
                            <ul class="list-group list-group-flush bg-light">
                               <li class="list-group-item"><strong>Usuario:</strong> <?php echo $separar['AppTuser']; ?></li> 
                               <li class="list-group-item"><strong>Cuenta:</strong> <?php echo $separar['NombreNivel']; ?></li>  
                            </uk>                      
                          </div>
                       </div>
                  </div>
              </div>
     </section>
</div>
<!-- modal modificar perfil -->
<div class="modal fade" id="ModificarPerfil" tabindex="-1" aria-labelledby="ModificarPerfilLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModificarPerfilLabel">
           <svg class="bi" width="15" height="15" fill="currentColor">
              <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/> 
          </svg> Modificar Perfil
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="Container">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
             <div class="row">
                 <div class="col">
                     <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1">
                          <svg class="bi" width="20" height="20" fill="currentColor">
                             <use xlink:href="app/icons/bootstrap-icons.svg#file-person"/> 
                          </svg>
                       </span>
                          <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php echo $separar['Nombre']; ?>" require/>
                      </div>
                 </div>
                 <div class="col">
                    <input type="text" class="form-control" name="Apellidop" id="Apellidop" placeholder="Apellido Paterno" value="<?php echo $separar['ApellidoP']; ?>" require>
                 </div>
                 <div class="col">
                    <input type="text" class="form-control" name="Apellidom" id="Apellidom" placeholder="Apellido Materno" value="<?php echo $separar['ApellidoM']; ?>" require>
                 </div>
             </div>
             <div class="row">
                <div class="col">
                  <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1">
                          <svg class="bi" width="20" height="20" fill="currentColor">
                             <use xlink:href="app/icons/bootstrap-icons.svg#telephone-fill"/> 
                          </svg>
                       </span>
                          <input type="tel" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" value="<?php echo $separar['Telefono']; ?>" require/>
                    </div>
                </div>
                <div class="col">
                  <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1">
                          <svg class="bi" width="20" height="20" fill="currentColor">
                             <use xlink:href="app/icons/bootstrap-icons.svg#envelope-fill"/> 
                          </svg>
                       </span>
                          <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $separar['Email']; ?>" require/>
                    </div>
                </div>
             </div>
          </form>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-sm btn-success">Modificar</button>
      </div>
    </div>
  </div>
</div>
  <!-- termina modal -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  <script src="js/pace.js"></script>
</body>
</html>