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
   // consulta para extrar datos de producto
   $query = "SELECT * FROM Oficios $where ORDER BY NombreOf";
   $resultado = $conect->query($query);
   $numero = $resultado->num_rows;
   // numero de resultados mostrados
   $paginacion = 5;
   // calculo de los numero de paginas 
   $paginas = $numero/$paginacion;
   $paginas = ceil($paginas);

   if($numero > 0){
     $tabla.="<table class='table bg-white table-hover table-responsive'>
                <thead>
                    <tr>
                      <th scope='col' class='bg-white'>Nombre Oficio</th>
                      <th scope='col' class='bg-white'>Descripción</th>
                      <th scope='col' class='bg-white'>Opciones</th>
                   </tr>
                </thead>
                <tbody>";
                while($row = $resultado->fetch_assoc()){
                $tabla.='<tr>
                         <td class="bg-white">'.$row['NombreOf'].'</td>
                         <td class="bg-white">'.$row['Descripcion'].'</td>
                         <td class="bg-white">Editar - Eliminar</td>
                         </tr>
                         <div class="container">';
               }
               $tabla.='<nav aria-label="Page navigation example">
                         <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>';
                          for($i=0; $i< $paginas; $i++){
                $tabla.='<li class="page-item"><a class="page-link" href="#">'.$i.'</a></li>';
                          }
                $tabla.= '<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                         </ul>
                     </nav>    
                        </div>'; 
            }
            else{
               $tabla.="<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                           <strong>Error!</strong> No se encontraron coinsidencias en los parametros de busqueda.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
            }   
} 
   
?>