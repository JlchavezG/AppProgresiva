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
                       <strong>Eror!</strong> El Registro del nuevo Oficio no se registro exitosamente dentro de la plataforma.
                       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    }
 }
// Busqueda de Oficios(Sistemas)
$tabla = "";
$Boficio = "SELECT * FROM Oficios ORDER BY Id_Oficio";
// validamo el uso del imput de busqueda 
if(isset($_POST['Oficios'])){
  $q = $conect->real_escape_string($_POST['Oficios']);
  $Boficio = "SELECT * FROM Oficios WHERE Id_Oficio LIKE '%".$q."%' OR NombreOf LIKE '%".$q."%' OR Descripcion LIKE '%".$q."%'";
}
$buscarOficio = $conect->query($Boficio);
if($buscarOficio->num_rows > 0){
   $tabla.='<table class="table">
             <tr clas="bg-white">
                <td>Nombre Oficio</td>
                <td>Descripción</td>
             </tr>';
             while($rowOficio = $buscarOficio->fetch_assoc()){
                $tabla.= '<tr>
                             <td>'.$rowOficio['NombreOf'].'</td>
                             <td>'.$rowOficio['Descripcion'].'</td>
                          </tr>';
             }
             $tabla.='</table>'; 
}
else{
    $tabla.="No se encontraron considencias  con los criterios de busqueda";
}
?>