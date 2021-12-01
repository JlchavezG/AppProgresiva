<?php 
 error_reporting(0);
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
  $latitud = $conect->real_escape_string($_POST['latitud']);
  $Longitud = $conect->real_escape_string($_POST['longitud']);
  $UserName = $conect->real_escape_string($_POST['usuario']);
  $Img = 'user.png';
  $Password = $conect->real_escape_string(md5($_POST['password']));
  $Estatus = '1';
  $Tuser = '4';
  $Online = '0';
  // verificar que no existe usuario o email igual en la base de datos 
  $vuser = "SELECT * FROM Usuarios WHERE Email = '$Email' || UserName = '$UserName'";
  $vusuario = $conect->query($vuser);
  if($vusuario->num_rows > 0){
   $alertas.='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error al registrar al usuario!</strong> El usuario o email ya esta registrado en la plataforma verifica tu Usuario o Email.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
              </div>';
  }
  else{
  // la consulta para insertar los datos 
  $Registro = "INSERT INTO Usuarios(Nombre, ApellidoP, ApellidoM, Telefono, Email, Id_Genero,
  Calle, Numero, Colonia, Id_Estado, Id_Municipio, Latitud, Longitud, UserName, Imagen, Password, 
  Estatus, TUser, Online)VALUES('$Nombre','$ApellidoP','$ApellidoM','$Telefono','$Email','$Genero',
  '$Calle','$Numero','$Colonia','$Estado','$Municipio','$latitud','$Longitud','$UserName','$Img','$Password','$Estatus','$Tuser','$Online')";
  $insertar = $conect->query($Registro);
  if($insertar > 0){
     $alertas.='<div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Registro exitoso!</strong> Bienvenido a nuestra platafoma ya puedes iniciar sesión con tu usuario y password solo da <a href="index.php"> A qui</a>.
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                   </button>
                </div>';
  }
  else{
   $alertas.='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error al Registrar!</strong> No se pudo registrar en la plataforma intenta más tarde o comunicate con soporte <a href="soporte.php"> A qui</a>.
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                   </button>
                 </div>';
  }

 }
}

?>