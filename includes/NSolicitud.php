<div class="container">
    <div class="row mt-3">
          <h2 class="text-center display-6 mt-2 text-muted">Nueva Solicitud</h2>
    </div>
    <div class="row mt-3">
       <div class="card shadow py-3 bg-light">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active bg-light" aria-current="page">Datos de trabajo</a>
            </li>
           </ul>
           <div class="row mt-2">
              <div class="col-sm-12 col-md-6 col-lg-6">
                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                 <textarea name="DescripcionT" id="Descripcion" cols="30" rows="5" class="form-control" placeholder="Descripción del trabajo" required></textarea>
              </div>
              <?php $FechaSol = date('Y-m-d'); ?>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="FechaT" class="text-muted">Selecciona la fecha</label>
                <input type="date" name="FechaT" class="form-control" value="<?php echo $FechaSol; ?>"/>
                <label for="HorarioT" class="text-muted">Horario de trabajo</label>
                <input type="time" name="FechaT" class="form-control">
              </div>
           </div>        
        </div>
    </div>
    <div class="row mt-3">
         <div class="card shadow py-3 bg-light">
           <ul class="nav nav-tabs">
              <li class="nav-item">
               <a class="nav-link active bg-light" aria-current="page">Ubicación</a>
              </li>
           </ul>
           <div class="row mt-2">
              <div class="col-ms-12 col-md-6 col-lg-6">
                 <input type="text" name="Calle" placeholder="Calle" class="form-control" require>
                 <input type="text" name="Numero" placeholder="Numero" class="form-control mt-2" require>
                 <input type="text" name="Colonia" placeholder="Colonia" class="form-control mt-2" require>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
              <div class="input-group mb-1">
                 <label class="input-group-text" for="Estado">Estado</label> 
                   <select class="form-select" id="estado" name="estado">
                        <option selected> Selecciona una opción</option>
                        <?php while($row1 = $estados->fetch_assoc()){ ?>
                        <option value="<?php echo $row1['Id_Estado'];?>"><?php echo $row1['NombreE'];?></option> 
                        <?php } ?>
                  </select>
               </div>
               <div class="input-group mb-2">
                  <label class="input-group-text" for="Municipio">Municipio</label> 
                  <select class="form-select" id="municipio" name="municipio"></select>
               </div>
                <input type="hidden" name="latitud" id="latitud" required>
                <input type="hidden" name="longitud" id="longitud" required>
                <div class="input-group">
                  <label class="input-group-text" for="Municipio">Fecha</label> 
                  <input type="date" name="fecha" id="fecha" placeholder="Fecha" required class="form-control">
                </div>
              </div>
           </div>
         </div>
        </div>


</div>

</form>











<div id="map"></div>