<?php
  $dir = 'img/qr/';
  if (!file_exists($dir))
  mkdir($dir);
  {
        $filename = $dir.'user'.$separar['Id_Usuarios'].'png';
        $tam = 4;
        $lavel = 'H';
        $frameSize = '3';
        $Qrnom = $separar['Nombre'];
        $Qrnom1 = $separar['ApellidoP'];
        $Qrnom2 = $separar['ApellidoM'];
        $Qrtele = $separar['Telefono'];
        $Qrcorreo = $separar['Email'];
        $Tperfil = $separar['AppTuser'];
        $Qrcontenido = 'BEGIN:VCARD'."\n"
        . 'VERSION:2.1'."\n"
        . 'FN:'.$Qrnom. $Qrnom1."\n"
        .'TEL;WORK;VOICE:'.$Qrtele."\n"
        .'TITLE:'.$Tperfil."\n"
        .'EMAIL:'.$Qrcorreo."\n"
        . "END:VCARD";
        QRcode::png($Qrcontenido,$filename,$lavel,$tam,$frameSize);
  
  }

?>
<div class="container pt-4 mt-5" id="printElement">
     <section id="Perfil">
         <div class="container py-3 mt-4">
             <div class="row py-3">
                 <h4 class="text-secondary text-center display-5">Perfil de <span class="text-warning">usuario</span></h4>
             </div>
          <div class="row mt-2 text-center">
          <div class="col py-2">
                <a href="app.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="35" height="35" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                </svg> Salir </a>
          </div>
          <div class="col"></div>
          <div class="row container">
             <?php echo $Mensaje; ?>
           </div>
           </div>
             <div class="row">
               <div class="container">
               </div>
               <div class="col-sm-12 col-md-12 col-lg-6">
                 <div class="text-center py-3 mt-5">
                     <div class="ImgHover mt-5">
                       <a href="#" data-bs-toggle="modal" data-bs-target="#ImagenModal"><img src="img/user/<?php echo $separar['Imagen']?>" alt="Imagen de perfil" width="280px" height="280px" class="rounded shadow mt-3 ImagenHover"></a>  
                     </div>
                  </div>
               </div>
               <div class="col-sm-10 col-md-10 col-lg-6 mt-3">
                 <div class="row py-3 text-center mt-3">
                    <div class="col">
                        <a href="#" class="text-decoration-none text-secondary" id="printButton"><svg class="bi" width="20" height="20" fill="currentColor">
                          <use xlink:href="library/icons/bootstrap-icons.svg#printer-fill"/> 
                        </svg> Imprimir</a>
                    </div>
                    <div class="col">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                          <use xlink:href="library/icons/bootstrap-icons.svg#clock-history"/> 
                        </svg> Historial</a>
                    </div>
                    <div class="col">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#AyudaMPerfil" class="text-decoration-none text-secondary">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                          <use xlink:href="library/icons/bootstrap-icons.svg#lightbulb"/> 
                        </svg> Ayuda</a>
                    </div>
                    <div class="col">
                        <a href="AppExpediente.php" class="text-decoration-none text-secondary">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                          <use xlink:href="library/icons/bootstrap-icons.svg#folder-plus"/> 
                        </svg> Expediente</a>
                    </div>
                 </div>
                 <div class="mt-2 col-sm-12 col-md-12 col-lg-12">
                    <div class="accordion shadow" id="accordionPanelsStayOpenExample">
                       <div class="accordion-item bg-light">
                           <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                              <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Datos de Contacto
                              </button>
                           </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                         <div class="accordion-body">
                           <ul class="list-group list-group-flush bg-light">
                             <li class="list-group-item bg-light"><strong>Nombre: </strong> <?php echo $separar['Nombre']; ?> <?php echo $separar['ApellidoP']; ?> <?php echo $separar['ApellidoM'];?></li>
                             <li class="list-group-item bg-light"><strong>Telefono:</strong> <?php echo $separar['Telefono']; ?></li>
                             <li class="list-group-item bg-light"><strong>Email: </strong> <?php echo $separar['Email']; ?></li>
                             <li class="list-group-item text-end bg-light">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#MPassword" class="text-decoration-none text-secondary">
                                <svg class="bi" width="15" height="15" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/> 
                                </svg> Modificar Password</a>&nbsp;&nbsp;<a href="#" data-bs-toggle="modal" data-bs-target="#ModificarPerfil" class="text-decoration-none text-secondary">
                                <svg class="bi" width="15" height="15" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/> 
                                </svg> Editar Perfil</a>
                             </li>
                           </ul>
                         </div>
                       </div>
                 </div>
                 <div class="accordion-item bg-light">
                       <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                         <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                           Dirección
                         </button>
                       </h2>
                       <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                          <div class="accordion-body bg-light">
                            <ul class="list-group list-group-flush bg-light">
                               <li class="list-group-item bg-light"><strong>Calle: </strong> <?php echo $separar['Calle']; ?></li>
                               <li class="list-group-item bg-light"><strong>Numero:</strong> <?php echo $separar['Numero']; ?></li>
                               <li class="list-group-item bg-light"><strong>Colonia: </strong> <?php echo $separar['Colonia']; ?></li>
                               <li class="list-group-item bg-light"><strong>Estado:</strong> <?php echo $separar['NombreE']; ?></li>
                               <li class="list-group-item bg-light"><strong>Municipio:</strong> <?php echo $separar['NombreM']; ?></li>
                               <li class="list-group-item text-end bg-light"><a href="#" data-bs-toggle="modal" data-bs-target="#ModificarDireccion" class="text-decoration-none text-secondary">
                                <svg class="bi" width="15" height="15" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#pencil-fill"/> 
                                </svg> Editar Dirección</a></li>
                            </ul>
                          </div>
                       </div>
                   </div>
                   <div class="accordion-item bg-light">
                      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                         <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                           Codigo QR de la Cuenta
                         </button>
                       </h2>
                       <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                          <div class="accordion-body bg-light">
                            <ul class="list-group list-group-flush bg-light">
                               <li class="list-group-item bg-light"><strong>Usuario:</strong> <?php echo $separar['AppTuser']; ?></li> 
                               <li class="list-group-item bg-light"> 
                                  <?php echo '<img src="'.$filename.'"class="rounded mx-auto d-block img-thumbnail">';?>
                                  <div class="container text-center">Codigo Qr de usuario</div>
                                </li>
                            </uk>                      
                          </div>
                       </div>
                  </div>
              </div>
     </section>
</div>