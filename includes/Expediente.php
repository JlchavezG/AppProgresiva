<?php if($TExpedientes == 0) { ?>
<div class="container">
    <div class="row mt-3">
         <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
             <div class="card shadow mt-2 bg-light">
                    <p class="text-center mt-3">Datos para tu expediente</p><hr>
                    <div class="container">
                    <form action="">    
                       <div class="row">
                        <select name="TUsuario" class="form-select form-select-sm" required>
                           <?php $Option = $user['TUser'];?>    
                              <option value="">Selecciona Oficio o Tipo de usuario</option>
                              <?php  if($Option == '3'|| $Option == '5') { ?>
                              <?php while($Opciones = $oficios->fetch_assoc()){ ?>
                              <option value="<?php echo $Opciones['Id_Oficio'];?>"><?php echo $Opciones['NombreOf'];?></option>
                          <?php }?>
                          <?php } else { ?>
                              <option value="0">Socio</option>
                         <?php }?>
                       </select>
                    </form>
                    </div>
                    <div class="row mt-2">
                      <input type="text" name="NCredencial" placeholder="Nº de Credencial de elector" class="form-control" required>
                    </div>
                    <div class="row mt-2">
                      <label for="ImgCredencial">Sube tu Credencial de Elector</label>  
                      <input type="file" name="ImgCredencial" placeholder="Selecciona la imagen" class="form-control" required>
                    </div>
                    <div class="row mt-2">
                    <label for="Cdomicilio">Sube tu comprobante de domicilio</label>  
                      <input type="file" name="Cdomicilio" placeholder="Selecciona un archivo" class="form-control" required>
                    </div>
                    <div class="row mt-2">
                    <select name="Banco" class="form-select form-select-sm" required>    
                              <option value="">Selecciona tu institucion bancaria</option>
                              <?php while($OpcionesB = $Bancos->fetch_assoc()){ ?>
                              <option value="<?php echo $OpcionesB['Id_Bancos'];?>"><?php echo $OpcionesB['NombreBanco'];?></option>
                          <?php }?>
                    </select>
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
    </div>   
         <div class="col-sm-12 col-md-6 col.lg-6">
          2
        </div>
    </div>
</div>
<?php } else { ?>
  <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="alert alert-danger" role="alert">
                  Su expediente esta completado dentro de la plataforma ¿Necesitas Actualizarlo?
            </div>
       </div>
  </div>
<?php } ?>