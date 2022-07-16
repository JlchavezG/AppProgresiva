<?php
$FechSolicitud = date('Y-m-d');
$FechaFormat = $FechSolicitud = date('d-m-Y');
$hora = date('H:i:s');

?>
<div class="container mt-5">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <div class="card shadow bg-light">
       <div class="row mt-2 container">
          <div class="col-sm-12 col-md-6 col-lg-6 py-1">
             <div class="input-group mb-1">
                <span class="input-group-text" id="basic-addon1">Usuario solicitante</span>
                <input type="text" class="form-control" id="Solicitante" placeholder="Solicitante" aria-label="Solicitante" aria-describedby="basic-addon1" value="<?php echo $separar['Nombre']." ".$separar['ApellidoP']; ?>" disabled>
             </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 py-1">
            <div class="input-group mb-1">
              <select class="form-select" id="inputGroupSelect02">
                 <option selected>Selecciona un oficio...</option>
                 <?php while($RowOficios = $oficios->fetch_array()){?>
                 <option value="<?php echo $RowOficios['Id_Oficio']; ?>"><?php echo $RowOficios['NombreOf']; ?></option>
                 <?php } ?>
              </select>
              <label class="input-group-text" for="inputGroupSelect02">Oficio Solicitado</label>
            </div>
          </div>
       </div>
       <div class="row container py-1">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="input-group">
               <span class="input-group-text">Descripción del servicio:</span>
               <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
         </div>
       </div>
       <div class="row container py-1">
         <div class="col-sm-12 col-md-6 col-lg-6">
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Fecha de la solicitud</span>
                <input type="date" value="<?php echo $FechaFormat; ?>" class="form-control" required>
              </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-6">
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Hora de la solicitud</span>
                <input type="time" value="<?php echo $hora; ?>" class="form-control" required>
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



<div id="map"></div>