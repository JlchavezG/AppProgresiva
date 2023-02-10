<!-- Modal -->
<div class="modal fade" id="ModificarDireccion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modificar Dirección de Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="modal-body">
          <div class="container">
            <div class="row text-center">
              <div class="col">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">Calle</span>
                  <input type="hidden" value="<?php echo $separar['Id_Usuarios']; ?>" name="Md_id">
                  <input type="text" class="form-control" name="MCalle" value="<?php echo $separar['Calle']; ?>" aria-label="Calle" required>
                </div>
              </div>
              <div class="col">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">Numero</span>
                  <input type="text" class="form-control" name="MNumero" value="<?php echo $separar['Numero']; ?>" aria-label="Numero" required>
                </div>
              </div>
              <div class="col">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1">Colonia</span>
                  <input type="text" class="form-control" name="MColonia" value="<?php echo $separar['Colonia']; ?>" aria-label="Colonia" required>
                </div>
              </div>
            </div>
            <div class="row text-center mt-2">
              <div class="col">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="Estado">Estado</label>
                  <select class="form-select" id="estado" name="estado">
                    <option value="<?php echo $separar['Id_Estado'] ?>"><?php echo $separar[NombreE]; ?></option>
                    <?php while ($row1 = $estados->fetch_assoc()) { ?>
                      <option value="<?php echo $row1['Id_Estado']; ?>"><?php echo $row1['NombreE']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="Municipio">Municipio</label>
                  <select class="form-select" id="municipio" name="municipio">
                    <option value="<?php echo $separar['Id_Municipios']; ?>"><?php echo $separar['NombreM']; ?></option>
                  </select>
                </div>
                <input type="hidden" name="latitud" id="latitud" value="<?php echo $separar['Latitud']; ?>" required>
                <input type="hidden" name="longitud" id="longitud" value="<?php echo $separar['Longitud']; ?>" required>
              </div>
            </div>
            <div class="row text-center mt-3">
              <div class="row text-center mt-1">
                <p>Por favor selecciona el punto exacto de tu dirección</p>
              </div>
              <div id="map"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" name="ModificaDirecc" value="Modificar Dirección" class="btn btn-sm btn-primary bg-gradient rounded-pill">
        </div>
      </form>
    </div>
  </div>
</div>