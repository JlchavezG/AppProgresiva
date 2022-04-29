   <div class="container pt-4 mt-5 col-sm-10 col-md-10 col-lg-10">
   <div class="mt-2">
        <div class="row text-center mt-4">
            <h2 class="display-6"> Administrar Oficios</h2>
        </div> 
        <div class="row mt-2">
          <div class="col py-2">
                <a href="appOficio.php" class="text-decoration-none text-muted">
                  <svg class="bi text-danger" width="20" height="20" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-left-circle-fill"/>
                  </svg> Regresar</a>
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
    <section id="Tabla" class="Container">    
     <div class="row mt-3 py-2 table-responsive">
        <table class="table bg-white table-lg">
           <thead>
              <tr>
                <th scope="col">Imagen</th>  
                <th scope="col">Nombre</th>
                <th scope="col">A.Paterno</th>
                <th scope="col">A.Materno</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Genero</th>
                <th scope="col">FechaNacimiento</th>
                <th scope="col">DomicilioCalle</th>
                <th scope="col">Numero</th>
                <th scope="col">DomicilioColonia</th>
                <th scope="col">Estado</th>
                <th scope="col">Municipio</th>
                <th scope="col">TUsuario</th>
                <th scope="col">UserName</th>
                <th scope="col">Opciones</th>
              </tr>
           </thead>
           <tbody>
           <?php while($separarUser = $verificarUser->fetch_assoc()){ ?>
              <tr>
                 <td><img src="img/user/<?php echo $separarUser['Imagen']; ?>" style="width:35px;"></td> 
                 <td scope="col"><?php echo $separarUser['Nombre']; ?></td>
                 <td scope="col"><?php echo $separarUser['ApellidoP']; ?></td>
                 <td scope="col"><?php echo $separarUser['ApellidoM']; ?></td>
                 <td scope="col"><?php echo $separarUser['Telefono']; ?></td>
                 <td scope="col"><?php echo $separarUser['Email']; ?></td>
                 <td scope="col"><?php echo $separarUser['NombreG']; ?></td>
                 <td scope="col"><?php echo $separarUser['FNac']; ?></td>
                 <td scope="col"><?php echo $separarUser['Calle']; ?></td>
                 <td scope="col"><?php echo $separarUser['Numero']; ?></td>
                 <td scope="col"><?php echo $separarUser['Colonia']; ?></td>
                 <td scope="col"><?php echo $separarUser['NombreE']; ?></td>
                 <td scope="col"><?php echo $separarUser['NombreM']; ?></td>
                 <td scope="col"><?php echo $separarUser['AppTuser']; ?></td>
                 <td scope="col"><?php echo $separarUser['UserName']; ?></td>
                 <td class="text-center">
                    <a href="MoficaOffApp.php?Id_Usuarios=<?php echo $separarUser['Id_Usuarios']; ?>" class="text-decoration-none text-secondary text-center">
                      <svg class="bi text-secondary" width="15" height="15" fill="currentColor">
                      <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/>
                      </svg>
                    </a> - <a onclick="return confirm('¿Deceas Eliminar al usuario?');" href="./includes/EliminarUsuario.php?Id_Usuario=<?php echo $separarUser['Id_Usuarios']; ?>" class="text-decoration-none text-secondary">
                    <svg class="bi text-danger" width="15" height="15" fill="currentColor">
                      <use xlink:href="library/icons/bootstrap-icons.svg#trash-fill"/>
                    </svg></a> 
                 </td>
               </tr>
            <?php } ?>
        </table>
     </div>
     <div class="row mt-3">
       <nav aria-label="Page navigation">
           <ul class="pagination">
              <li class="page-item <?php echo $_GET['paginaUser']<=1? 'disabled' : '' ?>">
                 <a class="page-link" href="AppAdminUsuarios.php?paginaUser=<?php echo $_GET['paginaUser']-1 ?>">
                    Anterior
                 </a>
              </li>
              <?php for($i=0; $i<$paginacionUser; $i++ ){ ?>
              <li class="page-item  <?php echo $_GET['paginaUser']==$i+1 ?'active' : '' ?>">
                  <a class="page-link" href="AppAdminUsuarios.php?paginaUser=<?php echo $i+1; ?>">
                    <?php echo $i+1; ?>
                  </a>
              </li>
              <?php } ?>
              <li class="page-item <?php echo $_GET['paginaUser']>=$paginacionUser? 'disabled' : '' ?>">
                  <a class="page-link" href="AppAdminUsuarios.php?paginaUser=<?php echo $_GET['paginaUser']+1 ?>">
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