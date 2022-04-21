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
                 <td>
                    <a href="" data-bs-toggle="modal" data-bs-target="#ModificarOficio" class="text-decoration-none text-secondary">
                      <svg class="bi" width="15" height="15" fill="currentColor">
                      <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/>
                      </svg>
                    </a> - <a onclick="return confirm('¿Deceas Eliminar el Oficio?');" href="./includes/EliminarOficio.php?Id_Oficio=<?php echo $rowOficio['Id_Oficio']; ?>" class="text-decoration-none text-secondary">
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
<!-- modal modificar oficio -->
<!-- Modal -->
<div class="modal fade" id="ModificarOficio" tabindex="-1" aria-labelledby="ModificarOficioLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar datos de oficio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="container">
              <input type="text" class="form-control" value="<?php echo $rowOficio['NombreOf'];?>">
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancelar</button>
          <input type="submit" class="btn btn-sm btn-success" value="Modificar Datos" name="ModOficio">
      
      </div>
    </form>
    </div>
  </div>
</div>
<!-- termina modal -->