<div class="container">
    <div class="row mt-3">
          <h2 class="text-center display-6 mt-2 text-muted">Nueva Solicitud</h2>
    </div>
    <div class="row mt-3">
       <div class="card shadow py-3 bg-light">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active bg-white" aria-current="page" href="#">Datos de trabajo</a>
            </li>
           </uL>
           <div class="row mt-2">
              <div class="col-sm-12 col-md-6 col-lg-6">
                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                 <textarea name="DescripcionT" id="Descripcion" cols="30" rows="5" class="form-control" placeholder="Descripción del trabajo" required></textarea>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="FechaT" class="text-muted">Selecciona la fecha</label>
                <input type="date" name="FechaT" class="form-control"/>
                <label for="HorarioT" class="text-muted">Horario de trabajo</label>
                <input type="time" name="FechaT" class="form-control">
              </div>
           </div>     
                </form>
        </div>
    </div>
</div>












<input type="text" name="latitud" id="latitud" required>
<input type="text" name="longitud" id="longitud" required>
<div id="map"></div>