<?php
 include 'includes/conection.php';
 include 'includes/querys.php';
 if(isset($_POST['Registrar'])){
   $Nombre = $conect->real_escape_string($_POST['nombre']);
   $ApellidoP = $conect->real_escape_string($_POST['apellidop']);
   $ApellidoM = $conect->real_escape_string($_POST['apellidom']);
   $Telefono = $conect->real_escape_string($_POST['telefono']);
   $Email = $conect->real_escape_string($_POST['email']);
   $Genero = $conect->real_escape_string($_POST['genero']);
   $Calle = $conect->real_escape_string($_POST['calle']);
   $Numero = $conect->real_escape_string($_POST['numero']);
   $Colonia = $conect->real_escape_string($_POST['colonia']);
   $Estado = $conect->real_escape_string($_POST['estado']);
   $Municipio = $conect->real_escape_string($_POST['municipio']);
   $Latitud = $conect->real_escape_string($_POST['latitud']);
   $Longitud = $conect->real_escape_string($_POST['longitud']);
   $UserName = $conect->real_escape_string($_POST['usuario']);
   $Img = 'user.png';
   $Password = $conect->real_escape_string(md5($_POST['password']));
   $Estatus = '1';
   $Tuser = '4';
   $Online = '0';
   // consulta para insertar los datos en la base de datos
 }

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Usuario | iscjlchavezg</title>
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
  </head>
  <body onload="findMe()";>
    <div class="container">
        <div class="row d-flex justify-content-center">
             <h2 class="text-center display-6 mt-5">Registro de | <span class="text-warning">Usuarios</span></h2>
             <div class="col-sm-12 col-md-12 col-lg-12 py-5">
                    <div class="card shadow">
                           <div class="container">
                               <div class="row py-3 text-center">
                                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                                               <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" required>
                                           </div>
                                           <div class="input-group mb-3">
                                               <span class="input-group-text" id="apellidop">
                                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                                    <use xlink:href="app/icons/bootstrap-icons.svg#pencil"/>
                                                 </svg>
                                               </span>
                                               <input type="text" class="form-control" name="apellidop" placeholder="Apellido Paterno" aria-label="Paterno" aria-describedby="basic-addon1" required>
                                           </div>
                                           <div class="input-group mb-3">
                                               <span class="input-group-text" id="apellidom">
                                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                                    <use xlink:href="app/icons/bootstrap-icons.svg#pencil"/>
                                                 </svg>
                                               </span>
                                               <input type="text" class="form-control" name="apellidom" placeholder="Apellido Materno" aria-label="Materno" aria-describedby="basic-addon1" required>
                                           </div>
                                           <div class="input-group mb-3">
                                               <span class="input-group-text" id="telefono">
                                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                                    <use xlink:href="app/icons/bootstrap-icons.svg#telephone"/>
                                                 </svg>
                                               </span>
                                               <input type="tel" class="form-control" name="telefono" placeholder="Telefono" aria-label="Telefono" aria-describedby="basic-addon1" required>
                                           </div>
                                           <div class="input-group mb-3">
                                               <span class="input-group-text" id="email">
                                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                                    <use xlink:href="app/icons/bootstrap-icons.svg#envelope"/>
                                                 </svg>
                                               </span>
                                               <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
                                           </div>
                                           <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">Genero</label>
                                                   <select class="form-select" id="genero" name="genero">
                                                      <option selected>Selecciona una opción</option>
                                                      <?php while($row = $genero->fetch_assoc()){ ?>
                                                      <option value="<?php echo $row['Id_Genero']; ?>"><?php echo $row['NombreG']; ?></option>
                                                      <?php } ?>
                                                   </select>
                                            </div>
                                       </div>
                                       <div class="col-sm-12 col-md-12 col-lg-4">
                                         <div class="py-2">
                                           <svg class="bi" width="15" height="15" fill="currentColor">
                                              <use xlink:href="app/icons/bootstrap-icons.svg#compass"/>
                                           </svg>
                                           <span class="text-muted">Datos de servicio</span>
                                         </div>
                                         <div class="input-group mb-3">
                                            <span class="input-group-text">Dirección</span>
                                               <input type="text" name="calle" aria-label="calle" class="form-control" placeholder="Calle" required>
                                               <input type="text" name="numero" aria-label="numero" class="form-control" placeholder="Numero" required>
                                         </div>
                                         <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Direccion 2</span>
                                            <input type="text" name="colonia" placeholder="Colonia" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                                         </div>
                                         <div class="input-group mb-3">
                                              <label class="input-group-text" for="inputGroupSelect01">Estado</label>
                                                 <select class="form-select" id="estado" name="estado" required>
                                                    <option selected>Selecciona una opción</option>
                                                    <?php while($row1 = $estados->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row1['Id_Estado'];?>"><?php echo $row1['NombreE'];?></option>  
                                                    <?php } ?>  
                                                 </select>
                                          </div>
                                          <div class="input-group mb-3">
                                               <label class="input-group-text" for="inputGroupSelect01">Municipio</label>
                                                  <select class="form-select" id="municipio" name="municipio" required>
                                                     
                                                  </select>
                                           </div>
                                           <input type="hidden" name="latitud" id="latitud" required>
                                           <input type="hidden" name="longitud" id="longitud" required>
                                           <div class="input-group mb-3">
                                               <span class="input-group-text" id="usuario">
                                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                                    <use xlink:href="app/icons/bootstrap-icons.svg#person-circle"/>
                                                 </svg>
                                               </span>
                                               <input type="text" class="form-control" name="usuario" placeholder="Usuario" aria-label="Email" aria-describedby="basic-addon1" required>
                                           </div>
                                           <div class="input-group mb-3">
                                               <span class="input-group-text" id="password">
                                                 <svg class="bi" width="15" height="15" fill="currentColor">
                                                    <use xlink:href="app/icons/bootstrap-icons.svg#key-fill"/>
                                                 </svg>
                                               </span>
                                               <input type="password" class="form-control" name="password" id="pass" placeholder="Password" aria-label="Email" aria-describedby="basic-addon1" required>
                                           </div>
                                       </div>
                                       <div class="col-sm-12 col-md-12 col-lg-4">
                                         <div class="py-2">
                                             <span class="text-muted">Seleccionar la direccion correcta</span>
                                         </div>
                                          <div id="map"></div>
                                          <div class="py-1 d-grid gap-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="aviso" onclick="activar(this);">
                                                    <label class="form-check-label" for="aviso">Aceptas aviso de privacidad</label>
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
  </div>
  <script type="text/javascript">
  // desabilitar btn de registro
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
