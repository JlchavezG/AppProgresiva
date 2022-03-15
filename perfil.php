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
               <div class="col-sm-12 col-md-12 col-lg-6">
                 <div class="text-center py-3">
                    <img src="img/user/<?php echo $separar['Imagen']?>" alt="Imagen de perfil" width="250px" height="250px" class="rounded-circle mt-3 ">  
                 </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-6">
                 <div class="mt-5">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
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
                               <li class="list-group-item"><strong>Calle: </strong> <?php echo $separar['Calle']; ?> <?php echo $separar['ApellidoP']; ?> <?php echo $separar['ApellidoM'];?></li>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
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