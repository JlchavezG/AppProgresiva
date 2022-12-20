<?php
$hora = date('H:i:s');
?>
<div class="row text-center mt-2">
    <div class="col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-sm-4 col-md-4 col-lg-4"></div>
</div>
<div class="container mt-5">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off" name="NSolicitud"
        id="NSolicitud">
        <div class="head-card">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <span class="nav-link active" aria-current="page">Datos de la solicitud</span>
                </li>
            </ul>
        </div>
        <div class="card-body shadow bg-light">
            <div class="row mt-2 container card-body">
                <div class="col-sm-12 col-md-6 col-lg-6 py-1">
                    <input type="hidden" name="IdUserN" id="IdUserN" value="<?php echo $separar['Id_Usuarios']; ?>"
                        required>
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Fecha de la solicitud</span>
                        <input type="date" name="FechaSolicitud" value="<?php echo date('Y-m-d'); ?>"
                            class="form-control" required disabled>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 py-1">
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Folio de la solicitud</span>
                        <input type="text" name="FolioNs" value="<?php echo $string; ?>" class="form-control" required
                            disabled>
                    </div>
                </div>
            </div>
            <div class="row mt-2 container">
                <div class="col-sm-12 col-md-6 col-lg-6 py-1">
                    <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Usuario solicitante</span>
                        <input type="text" class="form-control" name="Solicitante" id="Solicitante"
                            placeholder="Solicitante" aria-label="Solicitante" aria-describedby="basic-addon1"
                            value="<?php echo $separar['Nombre']." ".$separar['ApellidoP']; ?>" disabled>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 py-1">
                    <div class="input-group mb-1">
                        <select class="form-select" id="SolicitudOficio" name="SolicitudOficio" required>
                            <option selected>Selecciona un oficio...</option>
                            <?php while($RowOficios = $oficios->fetch_array()){?>
                            <option value="<?php echo $RowOficios['Id_Oficio']; ?>">
                                <?php echo $RowOficios['NombreOf']; ?></option>
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
                        <textarea class="form-control" aria-label="With textarea"
                            placeholder="Describe el servicio a realizar" required
                            name="DescripcionServicio"></textarea>
                    </div>
                </div>
            </div>
            <div class="row container py-1">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Hora de la solicitud</span>
                        <input type="time" name="HoraSolicitud" value="<?php echo $hora; ?>" class="form-control"
                            required disabled>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container mt-3">
    <div class="head-card">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <span class="nav-link active" aria-current="page">Datos del servicio</span>
            </li>
        </ul>
    </div>
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
             <div class="input-group mb-2">
              <input type="text" class="form-control" placeholder="Calle" aria-label="Calle" name="Calle" id="Calle" required>
                <span class="input-group-text">Numero</span>
                <input type="text" class="form-control" placeholder="Ejemplo 5 ó Lt7" aria-label="Numero" name="Numero" id="Numero" required >
             </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
              <div class="input-group mb-1">
                        <span class="input-group-text" id="basic-addon1">Colonia</span>
                        <input type="text" name="ColoniaNs"  class="form-control" id="ColoniaNs" required>
                    </div>
              </div>
        </div>
        <div class="row mt-1 container">
            <div class="col-sm-12 col-md-6 col-lg-6 mt-2">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="estado">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
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
                    <select class="form-select" id="municipio" name="municipio" required></select>
                    <input type="hidden" name="latitud" id="latitud" required>
                    <input type="hidden" name="longitud" id="longitud" required>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="container">
            <div class="card shadow bg-light mt-2">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header bg-light" id="flush-headingOne">
                            <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Selecciona tu Ubicación
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse bg-light"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="container">
            <div class="d-grid gap-2">
                <input type="submit" name="NuevaSolicitud" value="Enviar Solicitud"
                    class="btn btn-sm btn-primary rounded-pill">
            </div>
        </div>
    </div>
    </form>
</div>