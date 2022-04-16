<?php
  error_reporting();
  include 'includes/conection.php';
  include 'includes/Confing.php';
  include 'includes/querys.php';
  if(!$_GET){
     header("location:AppAdminOficios.php?pagina=1");
  }
  if($_GET['pagina']>$Tpaginas || $_GET['pagina'] <= 0){
    header("location:AppAdminOficios.php?pagina=1");
  }
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administracion Oficios | IscjlchavezG</title>
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
    if($Tsidebar == 1){include 'includes/SidebarSuperUser.php';}else if($Tsidebar == 2){include 'includes/SidebarGerente.php';}
    else if($Tsidebar == 3){include 'includes/SidebarSocioP.php';}else if($Tsidebar == 4){include 'includes/SidebarUsuarioP.php';}
    else if($Tsidebar == 5){include 'includes/SidebarSocioF.php';}else if($Tsidebar == 6){include 'includes/SidebarUsuarioF.php';}
  ?>
  <!-- termina sidebar -->
  <!-- inicia contenido -->
  <div class="container pt-4 mt-5">
    <div class="mt-2">
        <div class="row text-center mt-4">
            <h2 class="display-6"> Administrar Oficios</h2>
        </div> 
        <div class="row mt-2 text-center">
          <div class="col py-2">
                <a href="appOficio.php" class="text-decoration-none text-muted">
                  <svg class="bi text-danger" width="20" height="20" fill="currentColor">
                     <use xlink:href="app/icons/bootstrap-icons.svg#arrow-left-circle-fill"/>
                  </svg> Regresar </a>
          </div>
    <div class="col"></div>
    </div>
    <section id="Tabla">
     <div class="row mt-3 py-2 container">
        <table class="table table-hover table-responsive bg-white">
           <thead>
              <tr>
                <th scope="col">Oficio</th>
                <th scope="col">Descripción</th>
                <th scope="col">Opciones</th>
              </tr>
           </thead>
           <tbody>
           <?php while($rowOficio = $oficiosP->fetch_assoc()){ ?>
              <tr>
                 <td><?php echo $rowOficio['NombreOf']; ?></td>
                 <td><?php echo $rowOficio['Descripcion']; ?></td>
                 <td>
                    <svg class="bi" width="15" height="15" fill="currentColor">
                      <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/>
                    </svg> - <a onclick="return confirm('Deceas Eliminar el Oficio');" href="./includes/EliminarOficio.php?Id_Oficio=<?php echo $rowOficio['Id_Oficio']; ?>">
                    <svg class="bi" width="15" height="15" fill="currentColor">
                      <use xlink:href="app/icons/bootstrap-icons.svg#trash-fill"/>
                    </svg></a> 
                 </td>
               </tr>
            <?php } ?>
        </table>
     </div>
     <div class="row">
       <nav aria-label="Page navigation">
           <ul class="pagination">
              <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">
                 <a class="page-link" href="AppAdminOficios.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                    Anterior
                 </a>
              </li>
              <?php for($i=0; $i<$paginacion; $i++ ){ ?>
              <li class="page-item <?php echo $_GET['pagina']==$i+1 ?'active' : '' ?>">
                  <a class="page-link" href="AppAdminOficios.php?pagina=<?php echo $i+1; ?>">
                    <?php echo $i+1; ?>
                  </a>
             </li>
              <?php } ?>
              <li class="page-item <?php echo $_GET['pagina']>=$paginacion? 'disabled' : '' ?>">
                  <a class="page-link" href="AppAdminOficios.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                     Siguiente
                  </a>
             </li>
           </ul>
       </nav>
     </div>
 </section>       
 </div>
</div>
  <!-- termina contenido -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dark-mode.js"></script>
  <script src="js/pace.js"></script>
  </body>
</html>

