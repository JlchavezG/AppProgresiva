<?php
error_reporting(0);
 include 'conection.php';
 // modificar datos de usuario 
 if(isset($_POST['Modificar'])){    
 $id = $conect->real_escape_string($_POST['Id']);
 $Nombre = $conect->real_escape_string($_POST['Nombre']);
 $ApellidoP = $conect->real_escape_string($_POST['Apellidop']);
 $ApellidoM = $conect->real_escape_string($_POST['Apellidom']);
 $Telefono = $conect->real_escape_string($_POST['Telefono']);
 $Email = $conect->real_escape_string($_POST['Email']);
 $Genero = $conect->real_escape_string($_POST['genero']);
 $Fecha = $conect->real_escape_string($_POST['fecha']);
   // actualizar usuario
   $updateUser = "UPDATE Usuarios SET Nombre = '$Nombre', ApellidoP = '$ApellidoP', ApellidoM = '$ApellidoM', Telefono = '$Telefono', Email = '$Email',
   Id_Genero  = '$Genero', FNac = '$Fecha' WHERE Id_Usuarios = '$id'";
   $resultado = $conect->query($updateUser);
   if ($resultado > 0 ) {
      $Mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                   <strong>Excelente!</strong> Los datos de perfil se modificaron de manera exitosa dentro de la plataforma.
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>";
        }
 }
 // registro de oficios(sistemas)
 if(isset($_POST['Oficio'])){
    $NombreOficio = $conect->real_escape_string($_POST['NOficio']);
    $DescOficio = $conect->real_escape_string($_POST['DescOficio']);
    $inserta = "INSERT INTO Oficios(NombreOf, Descripcion)VALUES('$NombreOficio','$DescOficio')";
    $InsertaOficio = $conect->query($inserta);
    if($InsertaOficio > 0){
         $Alert.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Excelente!</strong> El Registro del nuevo Oficio se registro exitosamente dentro de la plataforma.
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    }
    else{
         $Alert.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                       <strong>Error!</strong> El Registro del nuevo Oficio no se registro exitosamente dentro de la plataforma.
                       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    }
 }
// Busqueda de Oficios(Sistemas)
// consulta para la busqueda de los oficios
if(isset($_POST['Buscar'])){
   $tabla="";
   $where = " ";
   if(!empty($_POST)){
     $valor = $_POST['Buscar'];
      if(!empty($valor)){
         $where = "WHERE NombreOf LIKE '%$valor%' OR Descripcion LIKE '%$valor%'";
      }
   } 
   // consulta para extrar datos de oficio
   $query = "SELECT * FROM Oficios $where ORDER BY NombreOf";
   $resultado = $conect->query($query);
   $numero = $resultado->num_rows;
   if($numero > 0){
     $tabla.="<div class='table-responsive'>
               <table class='table bg-white table-hover table-responsive'>
                <thead>
                    <tr>
                      <th scope='col' class='bg-white'>Nombre Oficio</th>
                      <th scope='col' class='bg-white'>Descripción</th>
                   </tr>
                </thead>
                <tbody>";
                while($row = $resultado->fetch_assoc()){
                $tabla.='<tr>
                         <td class="bg-white">'.$row['NombreOf'].'</td>
                         <td class="bg-white">'.$row['Descripcion'].'</td>
                         <td class="bg-white">
                             <svg class="bi text-success" width="20" height="20" fill="currentColor">
                                 <use xlink:href="library/icons/bootstrap-icons.svg#box-arrow-in-right"/>
                             </svg>
                         </td>
                         </tr>';
               } 
            }
            else{
               $tabla.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                           <strong>Error!</strong> No se encontraron coinsidencias en los parametros de busqueda.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                     </div>";
            }   
} 
// acciones para modificar datos perfil direccion 
if(isset($_POST['ModificaDirecc'])){
$IdM = $conect->real_escape_string($_POST['Md_id']);
$MCalle = $conect->real_escape_string($_POST['MCalle']);
$MNumero = $conect->real_escape_string($_POST['MNumero']);
$MColonia = $conect->real_escape_string($_POST['MColonia']);
$estado = $conect->real_escape_string($_POST['estado']);
$municipio = $conect->real_escape_string($_POST['municipio']);
$latitud = $conect->real_escape_string($_POST['latitud']);
$longitud = $conect->real_escape_string($_POST['longitud']);
// consulta para actualizar los datos 
$MDir = "UPDATE Usuarios SET Calle = '$MCalle', Numero = '$MNumero', Colonia = '$MColonia', Id_Estado = '$estado',
Id_Municipio = '$municipio', Latitud = '$latitud', Longitud = '$longitud' WHERE Id_Usuarios = '$IdM'";
$Up = $conect->query($MDir);
  if($Up > 0){
   $Mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                 <strong>Excelente!</strong> Los datos de la dirección se modificaron de manera exitosa dentro de la plataforma.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
  }
  else{
   $Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                 <strong>Error!</strong> Los datos de la dirección no se modificaron de manera exitosa dentro de la plataforma.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";   
  }
}  
//  acciones para modificar password 
if(isset($_POST['MoPassword'])){
 $IdPass = $conect->real_escape_string($_POST['IdPass']);
 $PassActual = $conect->real_escape_string(md5($_POST['PasswordAc']));
 $NewPass = $conect->real_escape_string($_POST['NewPassword']);
 $NewPassC = md5($NewPass);
 $CPassN = $conect->real_escape_string(md5($_POST['PasswordCon']));
 // consulta para extraer el password actual 
 $PassVerif = "SELECT * FROM Usuarios WHERE  Password = '$PassActual' and Id_Usuarios = '$IdPass'";
  if ($PassResultado = $conect->query($PassVerif)) {
    while ($rowPass = $PassResultado->fetch_array()) {
      $NPassok = $rowPass['Password'];
    }
  }
   if(isset($PassActual)) {
   if ($PassActual  == $NPassok) {
        if($NewPassC == $CPassN){
           // realizar la actualización de password al usuario 
           $ActualizaPassword = "UPDATE Usuarios SET Password = '$NewPassC' WHERE Id_Usuarios = '$IdPass'";
           $Actualizado = $conect->query($ActualizaPassword);
             if($Actualizado > 0){
               $Mensaje.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                             <strong>Excelente! </strong> El password se modifico de manera exitosa dentro de la plataforma los cambios se daran al cerrar la sesión.
                             <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                          </div>";   
             }
             else{
               $Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                              <strong>Error! </strong> El password no se modifico de manera exitosa dentro de la plataforma.
                              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                          </div>";
             }

        }
        else{
            $Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                           <strong>Error! </strong> La confirmación de los password no coinciden por favor verifica tus credenciales.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                       </div>";
        }

      }
    else {
       $Mensaje.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                    <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                      <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                    </svg>
                    <strong> Password Actual invalido</strong> Por favor verifica tus credenciales o contacta a soporte.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>";
         }
      }
  else {
    $Mensaje.="No hay datos que buscar";
   }
}
// modificar  imagen de perfil 
if(isset($_POST['Subir'])){
   $type = 'jpeg';
   $IdImg = $conect->real_escape_string($_POST['imgId']);
  
   }
?>