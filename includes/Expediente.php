<?php if($EjecExpediente->num_rows > 0){ ?>
   <div class="row mt-2 text-center mt-3">
          <div class="col py-2 mt-2">
                <a href="app.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="35" height="35" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                </svg> Salir </a>
          </div>
          <div class="col"></div>
  </div>         
  <div class="row mt-3">
       <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-info" role="alert">
                  Su expediente esta completado dentro de la plataforma <a href="ActulizarExp?Id_Expediente=<?php echo $DatosExp['Id_Expediente'] ?>" class="text-decoration-none link-secondary">¿Necesitas Actualizarlo?</a>
            </div>
       </div>
 </div>
 <div class="row">
          <div class="col-sm-12 col-md-2 col-lg-2 mt-3 py-2">
             <div class="card shadow bg-light">
                  <div class="row">
                       <div class="col text-center py-4">
                            <svg class="bi" width="30" height="30" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#cup-fill"/> 
                            </svg>
                       </div>
                       <div class="col mt-4">
                          <?php $badage = $DatosExp['Id_EstatusExp'];
                          if($badage == 1){ ?>
                               <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                               <?php echo $DatosExp['NomEstatus'];?><span class="visually-hidden"></span>
                               </span>
                          <?php } else if($badage == 2) { ?>
                               <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                               <?php echo $DatosExp['NomEstatus'];?><span class="visually-hidden"></span>
                               </span>
                           <?php } ?>
                          <span>Estatus</span>
                       </div>
                  </div>
             </div>
          </div>
          <div class="col-sm-8 col-md-8 col-lg-8 mt-4 ms-3">
             <div class="card shadow bg-secondary">
                  nombre:
             </div>             
         
          </div>


          <div class="col-sm-8 col-md-8 col-lg-8 mt-4">
               <span> 
                  <svg class="bi" width="30" height="30" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-person"/> 
                  </svg>
                  <a href="./doc/Exp/<?php echo $DatosExp['DocCredencial'];?>" target="_blank" class="text-decoration-none text-muted">
                      Documento Credencial Oficial
                  </a>
               </span>
               <span> 
                  <svg class="bi" width="30" height="30" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#file-pdf-fill"/> 
                  </svg>
                  <a href="./doc/Exp/<?php echo $DatosExp['DocDomicilio'];?>" target="_blank" class="text-decoration-none text-muted">
                      Documento Comprobante domicilio
                  </a>
               </span>
          </div>
       </div>   














       <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 mt-3 py-2">
            <span>Estatus del Expediente: <?php echo $DatosExp['NomEstatus'];?></span>
          </div>
          <div class="col-sm-8 col-md-8 col-lg-8 mt-4">
               <span> 
                  <svg class="bi" width="30" height="30" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#file-earmark-person"/> 
                  </svg>
                  <a href="./doc/Exp/<?php echo $DatosExp['DocCredencial'];?>" target="_blank" class="text-decoration-none text-muted">
                      Documento Credencial Oficial
                  </a>
               </span>
               <span> 
                  <svg class="bi" width="30" height="30" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#file-pdf-fill"/> 
                  </svg>
                  <a href="./doc/Exp/<?php echo $DatosExp['DocDomicilio'];?>" target="_blank" class="text-decoration-none text-muted">
                      Documento Comprobante domicilio
                  </a>
               </span>
          </div>
       </div>   
  </div>
       <div class="row mt-3">
          <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
             <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Nombre:</span>
                 <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" id="NomDis" value="<?php echo $DatosExp['Nombre']." ".$DatosExp['ApellidoP']." ".$DatosExp['ApellidoM']; ?>" aria-describedby="basic-addon1">
             </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
             <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Fecha de Exp:</span>
                 <input type="text" class="form-control" id="FechaDis" placeholder="Fecha" aria-label="Fecha" id="FechaDis" value="<?php $FechExp = $DatosExp['FechaExp']; $FechExp = date('d-m-Y'); echo $FechExp;?>" aria-describedby="basic-addon1">
             </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
               <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Oficio / TUsuario</span>
                 <input type="text" class="form-control" id="TuserDis" placeholder="Oficio / Usuario" aria-label="TuserDis" id="NomDis" value="<?php echo $DatosExp['NombreOf'];?>" aria-describedby="basic-addon1">
               </div>
          </div>
       </div>
       <div class="row mt-2">
          <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">No Credencial Oficial</span>
                 <input type="text" class="form-control" id="Ncredencial" placeholder="No Credencial" aria-label="Ncorencial" value="<?php echo $DatosExp['NumCredencial'];?>" aria-describedby="basic-addon1">
               </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Institución Bancaria</span>
                 <input type="text" class="form-control" id="Nbanco" placeholder="Institución Bancaria" aria-label="Nbanco" value="<?php echo $DatosExp['NombreBanco'];?>" aria-describedby="basic-addon1">
               </div>  
          
          </div>
       </div>
       <div class="row mt-2">
          <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">No de Cuenta</span>
                 <input type="text" class="form-control" id="Numcuenta" placeholder="No Cuenta" aria-label="Ncuenta" value="<?php echo $DatosExp['NCuenta'];?>" aria-describedby="basic-addon1">
               </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="input-group mb-3">
                 <span class="input-group-text" id="basic-addon1">Forma de Pago: </span>
                 <input type="text" class="form-control" id="Tpago" placeholder="Tipo de pago" aria-label="Tpago" value="<?php echo $DatosExp['DescripcionPago'];?>" aria-describedby="basic-addon1">
               </div>  
          
          </div>
       </div>

  </div>
<?php } else { ?>
  <div class="container">
    <div class="row mt-3 justify-content-center">
         <div class="row mt-2">
            <h3 class="text-muted  text-center">Registro de Expediente de Usuario/Socio de la plataforma.</h3>
         </div>
         <div class="col-sm-10 col-md-10 col-lg-10 mt-2">
               <div class="card shadow mt-2 bg-light">
                   <p class="text-center mt-3">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#folder-plus"/> 
                        </svg> Datos para tu expediente
                   </p>
                   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                   <div class="container py-3 mt-3">
                       <div class="row">
                            <select name="TUsuario" class="form-select form-select-sm" required>
                                <?php $Option = $user['TUser'];?>    
                                <option value="">Selecciona Oficio o Tipo de usuario</option>
                                <?php  if($Option == '3'|| $Option == '5') { ?>
                                <?php while($Opciones = $oficios->fetch_assoc()){ ?>
                                   <option value="<?php echo $Opciones['Id_Oficio'];?>"><?php echo $Opciones['NombreOf'];?></option>
                               <?php }?>
                              <?php } else { ?>
                                  <option value="19">Usuario del Aplicativo</option>
                              <?php }?>
                              </select>  
                       </div>
                       <div class="row mt-2">
                          <input type="text" maxlength="13" name="NCredencial" id="credencial" placeholder="Nº de Credencial de elector" class="form-control" onkeypress="return VNumeros(event)" onpaste="return false" required>
                       </div>
                       <div class="row mt-2">
                          <label for="ImgCredencial">Sube tu Credencial de Elector en formato Pdf</label>  
                          <input type="file" name="ImgCredencial" placeholder="Selecciona la imagen" class="form-control" required>
                       </div>
                       <div class="row mt-2">
                           <label for="Docdomicilio">Sube tu comprobante de domicilio en Formato Pdf</label>  
                           <input type="file" name="Docdomicilio" placeholder="Selecciona un archivo" class="form-control" required>
                       </div>
                   </div>
              </div>
         </div>
         <div class="col-sm-10 col-md-10 col-lg-10 mt-4">
             <div class="card shadow mt-2 bg-light">
                    <p class="text-center mt-3">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                             <use xlink:href="library/icons/bootstrap-icons.svg#folder-plus"/> 
                        </svg> Datos Bancarios</p>
                    <div class="container">
                        <div class="row"></div>
                    <div class="row mt-2">
                    <select name="Banco" class="form-select form-select-sm" required>    
                              <option value="">Selecciona tu institucion bancaria</option>
                              <?php while($OpcionesB = $Bancos->fetch_assoc()){ ?>
                              <option value="<?php echo $OpcionesB['Id_Bancos'];?>"><?php echo $OpcionesB['NombreBanco'];?></option>
                          <?php }?>
                    </select>
                    </div>
                    <div class="row mt-2">
                        <input type="text" class="form-control" maxlength="20" name="NCuenta" placeholder="Numero de cuenta" onkeypress="return VNumeros(event)" onpaste="return false">
                    </div>
                    <div class="row mt-2 mb-2">
                    <select name="Tpago" class="form-select form-select-sm" required>    
                              <option value="">Selecciona El tipo de Pago</option>
                              <?php while($OpcionesP = $Tpagos->fetch_assoc()){ ?>
                              <option value="<?php echo $OpcionesP['Id_TPago'];?>"><?php echo $OpcionesP['DescripcionPago'];?></option>
                          <?php }?>
                    </select>
                    </div>
                </div>
            </div>
            <div class="row py-4">
               <input type="submit" name="RegistrarExp" value="Registrar" class="btn btn-success btn-sm">        
               </form>
            </div>
        </div>   
    </div>
</div>
<?php } ?>





