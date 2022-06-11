





   >
 <div class="row mt-3">
    <div class="col-sm-12 col-md-3 col-lg-3">
    <div class="card shadow bg-light">
                  <div class="row">
                       <div class="col">
                            
                       </div>
                       <div class="col">

                       </div>
                       
                   </div>
              </div>
    <div class="col-sm-12 col-md-5 col-lg-5">2</div>
    <div class="col">2</div>
 </div>











 <div class="row">
          <div class="col-sm-12 col-md-3 col-lg-2 mt-3 py-2">
             
             </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-5 mt-4 ms-1">
             <div class="card shadow bg-light">
                 <div class="row">
                     <div class="col text-center py-4">
                            <svg class="bi" width="30" height="30" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#person-circle"/> 
                            </svg>
                     </div>
                     <div class="col mt-4">
                        <?php echo $DatosExp['Nombre']." ".$DatosExp['ApellidoP']." ".$DatosExp['ApellidoM']; ?>
                     </div>
                 </div>
             </div>     
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3 mt-4 ms-1">
              <div class="card shadow bg-light">
                  <div class="row">
                      <div class="col text-center py-4">
                            <svg class="bi" width="30" height="30" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#calendar-fill"/> 
                            </svg>
                      </div>
                      <div class="col mt-4">
                         <?php  $fechaE = $DatosExp['FechaExp']; $fechaE = date('d-m-Y'); ?>
                         <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary">
                            Fecha de Registro<span class="visually-hidden"></span>
                          </span>
                         <span><?php echo $fechaE; ?></span>
                     </div>
                  </div>
              </div>
          </div>
                           </div>
      </div>
      


       <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 mt-3 py-2">
               <div class="card shadow bg-light">
                     <div class="row">
                        <div class="col text-center py-4">
                            <svg class="bi" width="30" height="30" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#tools"/> 
                            </svg>
                        </div>
                        <div class="col text-center py-4">
                           <?php echo $DatosExp['NombreOf'];?>
                        </div>
                     </div>
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
                 <input type="text" class="form-control" id="TuserDis" placeholder="Oficio / Usuario" aria-label="TuserDis" id="NomDis" value="" aria-describedby="basic-addon1">
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







