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
 // verificar que el email se encuentre disponible dentro de l base de datos 
 $Valida = "SELECT * FROM Usuarios WHERE Email = '$Email'";
 $Validar = $conect->query($Valida);
 if($Validar->num_rows > 0){
   $Mensaje.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Lo sentimos!</strong> El Correo Electronico seleccionado ya se encuantra en uso en la plataforma.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    }
   else{
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
 }
?>