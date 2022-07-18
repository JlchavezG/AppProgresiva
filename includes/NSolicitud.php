<?php
$hora = date('H:i:s');

?>
<div class="container mt-5">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
   <div class="card shadow bg-light">
       <div class="row mt-2 container">
          <div class="col-sm-12 col-md-6 col-lg-6 py-1">
             <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1">Usuario solicitante</span>
                <input type="text" class="form-control" name="Solicitante" id="Solicitante" placeholder="Solicitante" aria-label="Solicitante" aria-describedby="basic-addon1" value="<?php echo $separar['Nombre']." ".$separar['ApellidoP']; ?>" disabled>
             </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 py-1">
            <div class="input-group mb-1">
              <select class="form-select" id="SolicitudOficio" name="SolicitudOficio" required>
                 <option selected>Selecciona un oficio...</option>
                 <?php while($RowOficios = $oficios->fetch_array()){?>
                 <option value="<?php echo $RowOficios['Id_Oficio']; ?>"><?php echo $RowOficios['NombreOf']; ?></option>
                 <?php } ?>
              </select>
              <label class="input-group-text" for="SolicitudOficio">Oficio Solicitado</label>
            </div>
          </div>
       </div>
       <div class="row container py-1">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="input-group">
               <span class="input-group-text">Descripción del servicio:</span>
               <textarea class="form-control" aria-label="With textarea" placeholder="Describe el servicio a realizar" required name="DescripcionServicio"></textarea>
            </div>
         </div>
       </div>
       <div class="row container py-1">
         <div class="col-sm-12 col-md-6 col-lg-6">
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Fecha de la solicitud</span>
                <input type="date" name="FechaSolicitud" value="<?php echo date('Y-m-d'); ?>" class="form-control" required disabled>
              </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-6">
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Hora de la solicitud</span>
                <input type="time" name="HoraSolicitud" value="<?php echo $hora; ?>" class="form-control" required disabled>
              </div>
         </div>
       </div>    
   </div>
</div>   
<div class="container mt-3">
   <div class="card shadow bg-light">
        <div class="row mt-1 container">
               <div class="col-sm-12 col-md-6 col-lg-6">
                 <div class="input-group mb-3 mt-2">
                   <span class="input-group-text" id="basic-addon1">Fecha solicitada para el servicio</span>
                   <input type="date" name="FechaSolicitada" class="form-control" required>
                 </div>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="input-group mb-3 mt-2">
                    <span class="input-group-text" id="basic-addon1">Horario solicitado</span>
                    <input type="time" name="HorarioSolicitado" class="form-control" required>
                  </div>
               </div>
        </div>
   </div>
</div>
<div class="container mt-3">
   <div class="card shadow bg-light">
        <div class="row mt-1 container">
           <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
              <div class="input-group mb-3">
                  <label class="input-group-text" for="estado">Estado</label> 
                  <select class="form-select" id="estado" name="estado">
                        <option selected> Selecciona una opción</option>
                        <?php while($row1 = $estados->fetch_assoc()){ ?>
                        <option value="<?php echo $row1['Id_Estado'];?>"><?php echo $row1['NombreE'];?></option> 
                        <?php } ?>
                  </select>
               </div>
           </div>
           <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
               <div class="input-group mb-3">
                  <label class="input-group-text" for="Municipio">Municipio</label> 
                  <select class="form-select" id="municipio" name="municipio"></select>
               </div>
           </div>
        </div>
   </div>
</div>



<div id="map"></div>