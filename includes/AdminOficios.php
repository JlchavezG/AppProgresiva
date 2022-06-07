   <div class="container pt-4 mt-5 col-sm-10 col-md-10 col-lg-10">
   <div class="mt-2">
        <div class="row text-center mt-4">
            <h2 class="display-6"> Administrar Oficios</h2>
        </div> 
        <div class="row mt-2">
          <div class="col py-2">
                <a href="appOficio.php" class="text-decoration-none text-muted">
                  <svg class="bi text-danger" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                  </svg> Salir</a>
          </div>
    <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="py-2">
            <div class="container">
              <a href="includes/Reporte_Oficios.php" target="_blank" class="text-decoration-none text-primary">
                <svg class="bi" width="20" height="20" fill="currentColor">
                  <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-pdf-fill"/>
                </svg> Generar PDF 
              </a>
            </div>
       </div>
    </div>
    </div>
    <section id="Tabla">
    <?php if($oficiosP->num_rows > 0) { ?>   
     <div class="row mt-3 py-2 container">
        <table class="table  table-responsive bg-white">
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
                 <td class="text-center">
                    <a href="MoficaOffApp.php?Id_Oficio=<?php echo $rowOficio['Id_Oficio']; ?>" class="text-decoration-none text-secondary text-center">
                      <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                      <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/>
                      </svg>
                    </a> - <a onclick="return confirm('¿Deceas Eliminar el Oficio?');" href="./includes/EliminarOficio.php?Id_Oficio=<?php echo $rowOficio['Id_Oficio']; ?>" class="text-decoration-none text-secondary">
                    <svg class="bi text-danger" width="15" height="15" fill="currentColor">
                      <use xlink:href="library/icons/bootstrap-icons.svg#trash-fill"/>
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
              <li class="page-item  <?php echo $_GET['pagina']==$i+1 ?'active' : '' ?>">
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
 <?php } else { ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Aun no hay Oficios Registrados!</strong> No se tiene registro de ningun oficio en la plataforma.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>  
 <?php } ?>      
 </section>       
</div>
</div>
<!-- termina contenido -->
