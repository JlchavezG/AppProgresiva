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
 if(isset($_POST['Oficio'])){
    $NombreOficio = $conect->real_escape_string($_POST['NOficio']);
    $DescOficio = $conect->real_escape_string($_POST['DescOficio']);
    // consulta para verificar que no se dupluque el oficio
    $VOficio = "SELECT * FROM Oficios WHERE NombreOf = '$NombreOficio'";
    $ValidaNombre = $conect->query($VOficio);
    if($ValidaNombre > 0){
      $Alert.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                   <strong>Error al Registrar!</strong> Los datos del Nuevo Oficio no se registraron de manera exitosa dentro de la plataforma por que ya existe.
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
    }
    else{
      $InsertOficio = "INSERT INTO Oficios(NombreOf, Descripcion)VALUES('$NombreOficio','$DescOficio')";
      $InsertOficios = $conect->query($InsertOficio);
      if($InsertOficios > 0){
      $Alert.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
                   <strong>Listo!</strong> Los datos del Nuevo Oficio se registraron dentro de la plataforma.
                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
      }

    }



 }
?>