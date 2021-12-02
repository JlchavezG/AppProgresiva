<?php include 'includes/RegistroUser.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
				$("#estado").change(function () {					
					$("#estado option:selected").each(function () {
						   Id_Estado  = $(this).val();
						$.post("includes/getMunicipio.php", { Id_Estado: Id_Estado  }, function(data){
							$("#municipio").html(data);
						});            
					});
				})
			});
    </script>
    <title>Registro de Usuarios | IscjlchavezG</title>
</head>
<body onload="findMe()";>
<div class="container">
    <div class="row d-flex justify-content-center">
       <h2 class="text-center display-6 mt-5">Registro de | <span class="text-warning"> Usuarios</span></h2>
       <p class="text-center text-muted">Bienvenidos al registro de usuario de nuestra plataforma. </p>
       <div class="row mt-2 text-center">
          <div class="col py-2">
                <a href="index.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="20" height="20" fill="currentColor">
                     <use xlink:href="app/icons/bootstrap-icons.svg#arrow-left-circle-fill"/>
                </svg> Regresar </a>
          </div>
          <div class="col"></div>
          <div class="col">
          <a href="#" data-bs-toggle="offcanvas" data-bs-target="#Ayuda" class="text-decoration-none text-muted"><svg class="bi text-warning" width="20" height="20" fill="currentColor">
                     <use xlink:href="app/icons/bootstrap-icons.svg#lightbulb"/>
                </svg> Ayuda </a>
          </div>
       </div>
       <div class="py-1 text-center">
       <?php echo $alertas; ?>
       </div>
       <div class="col-sm-12 col-md-12 col-lg-12 py-2">
          <div class="card shadow">
              <div class="container">
                 <div class="row py-3 text-center">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
                       <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-4">
                              <div class="py-2">
                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                    <use xlink:href="app/icons/bootstrap-icons.svg#person-lines-fill"/>
                                 </svg>
                                 <span class="text-muted">Datos Generales</span>
                              </div>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="nom">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                 </span>
                                 <input type="text" class="form-control" name="nombre" placeholder="Nombre" arial-label="Nombre" aria-describedby="basic-addon1" required>   
                              </div>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="apeliidop">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                 </span>
                                 <input type="text" class="form-control" name="apellidop" placeholder="Apellido Paterno" arial-label="Nombre" aria-describedby="basic-addon1" required>   
                              </div>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="apeliidom">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#pencil"/>
                                    </svg>
                                 </span>
                                 <input type="text" class="form-control" name="apellidom" placeholder="Apellido Materno" arial-label="Nombre" aria-describedby="basic-addon1" required>   
                              </div>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="telefono">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#telephone"/>
                                    </svg>
                                 </span>
                                 <input type="tel" class="form-control" name="telefono" placeholder="Telefono" arial-label="Nombre" aria-describedby="basic-addon1" required>   
                              </div>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="email">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#envelope"/>
                                    </svg>
                                 </span>
                                 <input type="email" class="form-control" name="email" placeholder="Email" arial-label="Nombre" aria-describedby="basic-addon1" required>   
                              </div>
                              <div class="input-group mb-3">
                                <label class="input-group-text" for="genero">Genero</label> 
                                <select class="form-select" id="genero" name="genero">
                                   <option selected> Selecciona una opción</option>
                                   <?php while($row = $genero->fetch_assoc()){ ?>
                                      <option value="<?php echo $row['Id_Genero'];?>"><?php echo $row['NombreG'];?></option> 
                                   <?php } ?>
                                </select>
                              </div>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="email">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#envelope"/>
                                    </svg>
                                 </span>
                                 <input type="date" class="form-control" name="fecha" placeholder="Fecha" arial-label="Fecha" aria-describedby="basic-addon1" required>   
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-4">
                              <div class="py-2">
                                  <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#compass"/>
                                  </svg>
                                  <span class="text-muted"> Datos de Servicio</span>
                              </div>
                              <div class="input-group mb-3">
                                 <span class="input-group-text">Dirección</span>
                                 <input type="text" name="calle" arial-label="calle" class="form-control" placeholder="Calle" required>
                                 <input type="text" name="numero" arial-label="numero" class="form-control" placeholder="Numero" required>
                              </div>
                              <div class="input-group mb-3">
                               <span class="input-group-text" id="colonia">Dirección2</span>
                               <input type="text" name="colonia" id="colonia" placeholder="Colonia" class="form-control" aria-label="Colonia" aria-describedby="Colonia" required>
                              </div>
                              <div class="input-group mb-3">
                                <label class="input-group-text" for="Estado">Estado</label> 
                                <select class="form-select" id="estado" name="estado">
                                   <option selected> Selecciona una opción</option>
                                   <?php while($row1 = $estados->fetch_assoc()){ ?>
                                      <option value="<?php echo $row1['Id_Estado'];?>"><?php echo $row1['NombreE'];?></option> 
                                   <?php } ?>
                                </select>
                              </div>
                              <div class="input-group mb-3">
                                <label class="input-group-text" for="Municipio">Municipio</label> 
                                <select class="form-select" id="municipio" name="municipio">
                                   
                                </select>
                              </div>
                              <input type="hidden" name="latitud" id="latitud" required>
                              <input type="hidden" name="longitud" id="longitud" required>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="usuarios">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#person-circle"/>
                                    </svg>
                                 </span>
                                 <input type="text" class="form-control" name="usuario" placeholder="Usuario" arial-label="Usuario" aria-describedby="basic-addon1" required>   
                              </div>
                              <div class="input-group mb-3">
                                  <span class="input-group-text" id="passwords">
                                    <svg class="bi" width="15" height="15" fill="currentColor">
                                       <use xlink:href="app/icons/bootstrap-icons.svg#key-fill"/>
                                    </svg>
                                 </span>
                                 <input type="password" class="form-control" name="password" id="pass" placeholder="Password" arial-label="password" aria-describedby="basic-addon1" required>   
                              </div>
                          </div>
                          <div class="col-sm-12 col-md-12 col-lg-4">
                             <div class="py-2">
                                 <span class="text-muted"> Selecciona tu dirección</span>
                             </div>
                             <div id="map"></div>
                             <div class="py-1 d-grid gap-2">
                                <div class="form-check form-switch">
                                   <input class="form-check-input" type="checkbox" role="switch" id="aviso" onclick="activar(this);">
                                   <label class="form-check-label" for="aviso1">
                                      <a href="#" class="text-decoration-none text-muted" data-bs-toggle="modal" data-bs-target="#Terminos">Acepto terminos y condiciones</a></label>
                                </div>
                                <input type="submit" id="registrar" name="Registrar" value="Registrar" class="btn btn-sm btn-success">
                             </div>
                          </div>
                       </div>
                    </form>
                 </div>
              </div>
          </div>
       </div>
    </div>
    <div class="container ">
        <div class="row d-flex justify-content-center mt-2">
           <img src="img/craken.png" alt="logo" style="width:100px;">
        </div>
    </div>
</div>
<!-- ofcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="Ayuda" aria-labelledby="Ayuda">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Ayuda en Registro de Usuarios</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    
  </div>
</div>  
 <?php include 'includes/Terminos.php'; ?> 
<script>
    // deabilitar el boton de registrar
    document.getElementById('registrar').disabled=true;
    function activar(cb){
        if(cb.checked)
        document.getElementById('registrar').disabled=false;
        else
        document.getElementById('registrar').disabled=true;
    }
</script>
<script src="js/main.js"></script> 
<script src="js/pace.js"></script>   
<script src="js/bootstrap.min.js"></script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMPGtM7VUn1aq61tkGbu99qD95c-w5zc&callback=initMap"></script>    
</body>
</html>