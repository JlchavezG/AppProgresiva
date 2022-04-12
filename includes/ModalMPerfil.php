<div class="modal fade" id="ModificarPerfil" tabindex="-1" aria-labelledby="ModificarPerfilLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="ModificarPerfilLabel">
           <svg class="bi" width="15" height="15" fill="currentColor">
              <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/> 
          </svg> Modificar Perfil de Usuario
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="Container">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
             <div class="row">
             <input type="hidden" value="<?php echo $separar['Id_Usuarios']; ?>" name="Id" id="Id">
                 <div class="col">
                     <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1">
                          <svg class="bi" width="20" height="20" fill="currentColor">
                             <use xlink:href="app/icons/bootstrap-icons.svg#file-person"/> 
                          </svg>
                       </span>
                          <input type="text" name="Nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" value="<?php echo $separar['Nombre']; ?>" require/>
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
                          <input type="tel" name="Telefono" class="form-control" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" value="<?php echo $separar['Telefono']; ?>" require/>
                    </div>
                </div>
                <div class="col">
                  <div class="input-group mb-3">
                       <span class="input-group-text" id="basic-addon1">
                          <svg class="bi" width="20" height="20" fill="currentColor">
                             <use xlink:href="app/icons/bootstrap-icons.svg#envelope-fill"/> 
                          </svg>
                       </span>
                          <input type="email" name="Email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $separar['Email']; ?>" require/>
                    </div>
                </div>
             </div>
             <div class="row">
                 <div class="col">
                    <div class="input-group mb-3">
                          <label class="input-group-text" for="genero">Genero</label> 
                          <select class="form-select" id="genero" name="genero">
                              <option selected value="<?php echo $separar['Id_Genero'] ?>"><?php echo $separar['NombreG']; ?> </option>
                              <?php while($row = $genero->fetch_assoc()){ ?>
                               <option value="<?php echo $row['Id_Genero'];?>"><?php echo $row['NombreG'];?></option> 
                                <?php } ?>
                        </select>
                      </div>
                 </div>
                 <div class="col">
                   <div class="input-group mb-3">
                      <span class="input-group-text" id="email">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                          <use xlink:href="app/icons/bootstrap-icons.svg#calendar-fill"/>
                        </svg>
                      </span>
                      <input type="date" class="form-control" name="fecha" placeholder="Fecha" arial-label="Fecha" aria-describedby="basic-addon1" value="<?php echo $separar['FNac']; ?>" required>   
                    </div>
                 </div>
             </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" name="Modificar" value="Modificar" class="btn btn-sm btn-success">
      </div>
    </div>
  </div>
</div>
</form>