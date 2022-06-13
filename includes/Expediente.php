<?php if($EjecExpediente->num_rows > 0){ ?>
   <div class="row mt-2 text-center mt-3 justify content-center">
          <div class="col py-2 mt-2">
                <a href="app.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="35" height="35" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                </svg> Salir </a>
          </div>
          <div class="col"></div>
  </div>         
  <div class="row mt-3">
       <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-info text-center" role="alert">
                  Su expediente esta completado dentro de la plataforma <a href="ActulizarExp?Id_Expediente=<?php echo $DatosExp['Id_Expediente'] ?>" class="text-decoration-none link-secondary">¿Necesitas Actualizarlo?</a>
            </div>
       </div>
  </div>
  <div class="container justify-content-center">
    <!-- inicia una linea -->
    <div class="row mt-3 text-center">
        <!-- inicia una columna -->
        <div class="col-sm-12 col-md-3 col-lg-4">
             <div class="card shadow bg-light mt-2">
                 <!-- inicia la linea dentrop de la card-->
                  <div class="row">
                     <div class="col mt-2 py-4">
                         <svg class='bi' width='30' height='30' fill='currentColor'>
                            <use xlink:href='library/icons/bootstrap-icons.svg#flag-fill'/> 
                         </svg>
                     </div>
                     <div class="col mt-2 py-4">
                     <?php $Badage = $DatosExp['Id_EstatusExp']; if($Badage == 1){?>
                         <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-info">
                             <?php echo $DatosExp['NomEstatus']; ?><span class="visually-hidden">unread messages</span>
                         </span>
                      <?php } else if($Badage == 2){ ?>
                         <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-success">
                             <?php echo $DatosExp['NomEstatus']; ?><span class="visually-hidden">unread messages</span>
                         </span>
                      <?php } else if($Badage == 3){ ?>
                         <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-warning">
                             <?php echo $DatosExp['NomEstatus']; ?><span class="visually-hidden">unread messages</span>
                         </span>
                      <?php } ?>     
                     <span>Estatus Expediente</span>
                     </div>
                  </div>
                  <!-- termina la line denro de la card -->
             </div>   
        </div>
        <!-- termina una columna -->
        <!-- inicia una columna -->
        <div class="col-sm-12 col-md-5 col-lg-5">
           <div class="card shadow bg-light mt-2">
            <!-- inicia la linea dentro de la card -->
            <div class="row">
               <div class="col mt-2 py-4">
                   <svg class='bi' width='30' height='30' fill='currentColor'>
                     <use xlink:href='library/icons/bootstrap-icons.svg#person-circle'/> 
                  </svg>
               </div>
               <div class="col mt-2 py-4">
                    <span><?php echo  $DatosExp['Nombre']." ".$DatosExp['ApellidoP']; ?></span>
               </div>
            </div>
            <!-- termina la linea dentro de la card -->
           </div>
        </div>
        <!-- termina una columna -->
         <!-- termina una columna -->
        <div class="col-sm-12 col-md-4 col-lg-3">
           <div class="card shadow bg-light mt-2">
               <!-- inicia la linea dentro de la card -->
               <div class="row">
                  <div class="col mt-2 py-4">
                     <svg class='bi' width='30' height='30' fill='currentColor'>
                       <use xlink:href='library/icons/bootstrap-icons.svg#calendar-fill'/> 
                     </svg>
                  </div>
                  <div class="col mt-2 py-4">
                     <?php $dateExp = $DatosExp['FechaExp'];
                            $dataExp = date('d-m-Y') ?>
                       <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary">
                           <span>Fecha de Registro</span><span class="visually-hidden">unread messages</span>
                      </span>        
                      <span><?php echo $dataExp; ?></span>
                  </div>
               </div>
               <!-- inicia la linea dentro de la card -->
           </div> 
        </div>
        <!-- termina una columna -->
    </div>
    <!-- termina la linea -->
    <div class="row mt-3 text-center">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card shadow bg-light mt-2">
                 <div class="row">
                     <div class="col mt-2 py-4">
                        <svg class='bi' width='30' height='30' fill='currentColor'>
                          <use xlink:href='library/icons/bootstrap-icons.svg#tools'/> 
                        </svg>
                     </div>
                     <div class="col mt-2 py-4">
                          <?php echo $DatosExp['NombreOf']; ?>
                     </div>
                 </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="card shadow bg-light mt-2">
                 <div class="row">
                     <div class="col mt-2 py-4">
                        <svg class='bi' width='30' height='30' fill='currentColor'>
                          <use xlink:href='library/icons/bootstrap-icons.svg#card-heading'/> 
                        </svg>
                     </div>
                     <div class="col mt-2 py-4">
                       <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-secondary">
                           <span>Numero de Identificación</span><span class="visually-hidden">unread messages</span>
                       </span>
                          <?php echo $DatosExp['NumCredencial']; ?>
                     </div>
                 </div>
            </div>
        </div>
   </div>
   <div class="row mt-3 text-center">
      <div class="col-sm-12 col-md-3 col-lg-3">
         <div class="card shadow bg-light mt-2">
            <div class="row">
                <div class="col mt-2 py-4">
                    <svg class='bi' width='30' height='30' fill='currentColor'>
                       <use xlink:href='library/icons/bootstrap-icons.svg#safe-fill'/> 
                    </svg>
                </div>
                <div class="col mt-2 py-4">
                  <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-secondary">
                           <span>Tu Banco</span><span class="visually-hidden">unread messages</span>
                   </span>
                   <span><?php echo $DatosExp['NombreBanco'];  ?></span>
                </div>
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
      <div class="card shadow bg-light mt-2">
            <div class="row">
                <div class="col mt-2 py-4">
                    <svg class='bi' width='30' height='30' fill='currentColor'>
                       <use xlink:href='library/icons/bootstrap-icons.svg#credit-card-2-back-fill'/> 
                    </svg>
                </div>
                <div class="col mt-2 py-4">
                  <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark">
                           <span>No de Cuenta</span><span class="visually-hidden">unread messages</span>
                   </span>
                   <span><?php echo $DatosExp['NCuenta'];  ?></span>
                </div>
            </div>
      </div>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
      <a href="./doc/Exp/<?php echo $DatosExp['DocDomicilio']; ?>" class="text-decoration-none text-warning" target="_blank"><div class="card shadow bg-light mt-2">
             <div class="row">
               <div class="col mt-2 py-4">
                    <svg class='bi' width='30' height='30' fill='currentColor'>
                       <use xlink:href='library/icons/bootstrap-icons.svg#file-earmark-pdf-fill'/> 
                    </svg>
                </div>
                <div class="col mt-2 py-4">
                   <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark">
                           <span>Comprobante</span></span><span class="visually-hidden">unread messages</span>
                   </span>
                    <span>PDF</span>
                </div>
             </div> 
          </div></a>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3">
          <a href="./doc/Exp/<?php echo $DatosExp['DocCredencial']; ?>" class="text-decoration-none text-warning" target="_blank"><div class="card shadow bg-light mt-2">
             <div class="row">
               <div class="col mt-2 py-4">
                    <svg class='bi' width='30' height='30' fill='currentColor'>
                       <use xlink:href='library/icons/bootstrap-icons.svg#file-earmark-pdf-fill'/> 
                    </svg>
                </div>
                <div class="col mt-2 py-4">
                   <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark">
                           <span>Identificación</span></span><span class="visually-hidden">unread messages</span>
                   </span>
                    <span>PDF</span>
                </div>
             </div> 
          </div></a>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card shadow bg-light mt-2 py-4">
                <div class="col text-center">
                    <span>Tipo de Pago: <?php echo $DatosExp['DescripcionPago']; ?> </span>
                </div>
            </div>
        </div>
      </div>   
    </div>
  </div> 
  <div class="row mt-3">
    <div class="container justify-content-center">
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
           <button class="accordion-button collapsed bg-light shadow" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Ubicación registrada en la plataforma
           </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
         <div class="accordion-body">
            <div id="mapa"></div>
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
         <div class="col-sm-10 col-md-10 col-lg-10">   
               <div class="card shadow bg-light">
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
<?php } ?>
<?php $Lat = $DatosExp['Latitud']; $Log = $DatosExp['Longitud']; ?>
<style>
    #mapa {
  height: 300px;
  width: 100%;
}
</style>
<script>
function initMap() {
  // Mapa y ubicación
  const ubicacion = { lat: <?php echo $Lat ?> , lng: <?php echo $Log ?> };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("mapa"), {
    zoom: 14,
    center: ubicacion,
  });
  // marcador
  const marker = new google.maps.Marker({
    position: ubicacion,
    map: map,
    title: "Tu dirección dentro de la Plataforma",
  });
  
}
window.initMap = initMap;
</script>




