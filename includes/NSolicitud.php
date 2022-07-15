<div class="container mt-5">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <div class="card shadow bg-light">
       <div class="row mt-2 container">
          <div class="col-sm-12 col-md-6 col-lg-6 py-1">
             <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Usuario solicitante</span>
                <input type="text" class="form-control" id="Solicitante" placeholder="Solicitante" aria-label="Solicitante" aria-describedby="basic-addon1" value="<?php echo $separar['Nombre']." ".$separar['ApellidoP']; ?>" disabled>
             </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 py-1">
            <div class="input-group mb-3">
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
 </form>    
   </div>
</div>
<div id="map"></div>