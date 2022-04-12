<?php
error_reporting(0);
// guardar la sesion
session_start();
//validar al usuario
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
  header("location:index.php");
}
//configurar la zona horaria de nustro servidor
ini_Set('date.timezone','America/Mexico_City');
$fecha = date('Y-m-d');
$tiempo = date('H:i:s', time());
$hora = date("H");
$dia = 7;
$tarde = 13;
$noche = 20;
$saludo = "";
$Accion = "Ingreso a la plataforma";
$Accion1 = "Salida de la plataforma";
if($hora > $tarde){
  $saludo = "Buenos dias";
}
else if($hora > $tarde){
  $saludo = "Buenas tardes";
}
else if($hora > $noche){
  $saludo = "Buenas noches";
}
// consulta cruzda para extrar todos los datos del usuario 
$unir = "SELECT U.Id_Usuarios, U.Nombre, U.ApellidoP, U.ApellidoM, U.Telefono, U.Email, U.Id_Genero, U.FNac, U.Calle,
U.Numero, U.Colonia, U.Id_Estado, U.Id_Municipio, U.Latitud, U.Longitud, U.UserName, U.Imagen, U.Password, U.Estatus, U.TUser, U.Online,
G.Id_Genero, G.NombreG, E.Id_Estado, E.NombreE, M.Id_Municipios, M.NombreM, TU.Id_TuserApp, TU.AppTuser, TU.DescripcionT FROM Usuarios U INNER JOIN Genero G ON  U.Id_Genero = G.Id_Genero 
INNER JOIN Estados E ON U.Id_Estado = E.Id_Estado INNER JOIN Municipios M ON U.Id_Municipio = M.Id_Municipios INNER JOIN TUsuario TU ON U.TUser = TU.Id_TuserApp  WHERE UserName = '$usuario'";
$verificar = $conect->query($unir);
$separar = $verificar->fetch_array();
// consulta para extraer los datos del usuario conectado
$consulta = "SELECT * FROM Usuarios WHERE UserName = '$usuario'";
$r = $conect->query($consulta);
$extraer = $r->fetch_array();
if($extraer > 0){
  $user = $extraer;
  $Online = $user['Id_Usuarios'];
  $on = "UPDATE Usuarios SET Online = '1' WHERE Id_Usuarios = $Online";
  $line = $conect->query($on);
}
// validacion de tiempo expirado dentro de la sesion
if(isset($_SESSION['time'])){
  // damos el timepo e segundos para determinar cuando expira la sesion
  $inactivo = 500; // 15 minutos
  // calculo tiempo y se resta lo inactivo
  $tiempo = time() - $_SESSION['time'];
  // verificar el tiempo inactivo dentro del aplicativo
  if($tiempo > $inactivo){
    // actualizar el campo online
    $on = "UPDATE Usuarios SET Online = '0' WHERE Id_Usuarios = $Online";
    $line = $conect->query($on);
    // registrar dentro del historial 
    $historialS = "INSERT INTO Historial(Id_Usuario, FechaH, Accion, HoraH)VALUES('$Online','$fecha','$Accion1','$tiempo')";
    $insertHistoS = $conect->query($historialS);
    // olvidar la sesion
    session_unset();
    // destruyo la sesion
    session_destroy();
    // rederigir la pagina al login
    header("location: index.php");
    exit();
  }
}
$_SESSION['time'] = time();
 ?>
