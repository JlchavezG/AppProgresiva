<head>
<script>
        $(document).ready(function(){
				$("#estado").change(function () {					
					$("#estado option:selected").each(function () {
						   Id_Estado  = $(this).val();
						$.post("includes/getMunicipio.php", {Id_Estado: Id_Estado}, function(data){
							$("#municipio").html(data);
						});            
					});
				})
			});
</script>
</head>
<body>
<div class="modal fade" id="ModificarDireccion" tabindex="-1" aria-labelledby="ModificarPerfilLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModificarPerfilLabel">
           <svg class="bi" width="15" height="15" fill="currentColor">
              <use xlink:href="app/icons/bootstrap-icons.svg#pencil-fill"/> 
          </svg> Modificar Dirección del Perfil
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="Container">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="Post">
             <div class="row">
                 <div class="col-sm-4 col-md-4 col-lg-4">
                      <input type="text" name="Calle" placeholder="Calle" class="form-control" value="<?php echo $separar['Calle']; ?>" >
                 </div>
                 <div class="col-sm-4 col-md-4 col-lg-4">
                      <input type="text" name="Numero" placeholder="Numero" class="form-control" value="<?php echo $separar['Numero']; ?>" >
                 </div>
                 <div class="col-sm-4 col-md-4 col-lg-4">
                      <input type="text" name="Colonia" placeholder="Colonia" class="form-control" value="<?php echo $separar['Colonia']; ?>" >
                 </div>
             </div>
             <div class="row py-3">
                 <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="input-group mb-3">
                         <label class="input-group-text" for="Estado">Estado</label> 
                         <select class="form-select" id="estado" name="estado">
                            <option value="<?php echo $separar['Id_Estado'];?>"><?php echo $separar['NombreE'] ?></option>
                            <?php while($row1 = $estados->fetch_assoc()){ ?>
                            <option value="<?php echo $row1['Id_Estado'];?>"><?php echo $row1['NombreE'];?></option> 
                            <?php } ?>
                         </select>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="input-group mb-3">
                         <label class="input-group-text" for="Municipio">Municipio</label> 
                          <select class="form-select" id="municipio" name="municipio">
                          </select>
                         </div>
                 </div>
             </div>
          </form>  
       </div>
    </div>   
</div>
</body>