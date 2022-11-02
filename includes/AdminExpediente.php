<div class="container">
     <div class="row mt-3">
        <h2 class="display-6 text-muted text-center mt-3">Administración de Expedientes</h2>
     </div>
     <div class="container">
     <div class="row mt-2">
          <div class="col py-2">
                <a href="AppUsuarios.php" class="text-decoration-none text-muted">
                  <svg class="bi text-danger" width="35" height="35" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                  </svg> Salir</a>
          </div>
     <div class="row mt-3 table-responsive">
         <table class="table bg-white table-sm text-center">
            <thead>
               <tr>
                   <th scope="col">Imagen</th>               
                   <th scope="col">Nombre</th>
                   <th scope="col">Apellidos</th>
                   <th scope="col">Telefono</th>
                   <th scope="col">Email</th>
                   <th scope="col">Genero</th>
                   <th scope="col">Calle</th>
                   <th scope="col">Numero</th>
                   <th scope="col">Colonia</th>
                   <th scope="col">Estado</th>
                   <th scope="col">Municipio</th>
                   <th scope="col">T.Usuario</th>
                   <th scope="col">Identificación</th>
                   <th scope="col">Comprobante</th>
                   <th scope="col">Banco</th>
                   <th scope="col">N.Cuenta</th>
                   <th scope="col">FormaPago</th>
                   <th scope="col">Estatus</th>
                   <th scope="col">Validar</th>
              </tr>
          </thead>
          <tbody>
               <?php while($Lineas = $EjExpedientes->fetch_array()) { ?>
                <tr>
                    <td scope="col"><img src="./img/user/<?php echo $Lineas['Imagen']; ?>" class="img-fluid rounded-circle"></td>
                    <td scope="col"><?php echo $Lineas['Nombre']; ?></td>
                    <td scope="col"><?php echo $Lineas['ApellidoP']." ".$Lineas['ApellidoM'] ?></td>
                    <td scope="col"><?php echo $Lineas['Telefono']; ?></td>
                    <td scope="col"><?php echo $Lineas['Email']; ?></td>
                    <td scope="col"><?php echo $Lineas['NombreG']; ?></td>
                    <td scope="col"><?php echo $Lineas['Calle']; ?></td>
                    <td scope="col"><?php echo $Lineas['Numero']; ?></td>
                    <td scope="col"><?php echo $Lineas['Colonia']; ?></td>
                    <td scope="col"><?php echo $Lineas['NombreE']; ?></td>
                    <td scope="col"><?php echo $Lineas['NombreM']; ?></td>
                    <td scope="col"><?php echo $Lineas['AppTuser']; ?></td>
                    <td scope="col"><a href="./doc/Exp/<?php echo $Lineas['DocCredencial']; ?>" target="_blank" class="text-decoration-none text-info"><span>Ver Identificación</span></a></td>
                    <td scope="col"><a href="./doc/Exp/<?php echo $Lineas['DocDomicilio']; ?>" target="_blank" class="text-decoration-none text-info"><span>Ver Documento</span></a></td>
                    <td scope="col"><?php echo $Lineas['NombreBanco']; ?></td>
                    <td scope="col"><?php echo $Lineas['NCuenta']; ?></td>
                    <td scope="col"><?php echo $Lineas['DescripcionPago']; ?></td>
                    <td scope="col"><?php echo $Lineas['NomEstatus']; ?></td>
                    <td scope="col">
                    <div class="form-check form-switch ">
                       <?php if($Lineas['Id_EstaExp'] == '1'){ ?>
                        <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="validar" onclick="validar(this);">
                        </div> 
                       <?php } ?>
                       <?php if($Lineas['Id_EstaExp'] == '2'){ ?>
                         <span class="text-success">Validado</span>
                       <?php } ?>   
                    </div>
                    </td>
                </tr>
                <?php } ?>
          </tbody>
        </table>
     </div>
</div>
<div class="container justify-content-center mt-3">
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-sm">
    <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">
        <a class="page-link" href="AppAdminExpedientes?pagina<?php echo $_GET['pagina']-1 ?>">Anterior</a>
    </li>
    <?php for($i=0; $i<$paginacionEx; $i++ ){ ?>
    <li class="page-item">
      <a class="page-link" href="AppAdminExpedientes.php?pagina=<?php echo $i+1; ?>">
      <?php echo $i+1; ?>
      </a>
    </li>
    <?php  } ?>
    <li class="page-item <?php echo $_GET['pagina']>=$paginacionEx? 'disabled' : '' ?>">
        <a class="page-link" href="AppAdminExpedientes?pagina<?php echo $_GET['pagina']+1 ?>">Siguiente</a>
    </li>
  </ul>
</nav>
</div>
<!-- Modal -->
<?php  $ir = $_GET['Id_Expediente']; ?>
<div class="modal fade" id="ValidarModal" tabindex="-1" aria-labelledby="ValidarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ValidarModalLabel">Validacion de expediente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo $ir; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Validar</button>
      </div>
    </div>
  </div>
     </div>
</div>
<script>
  function validar(cb){
    if(cb.checked)
      alert("¿Deceas validar el expediente?")
    else
     return false;
  }
</script>