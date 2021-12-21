<?php
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
if($hora > $tarde){
  $saludo = "Buenos dias";
}
else if($hora > $tarde){
  $saludo = "Buenas tardes";
}
else if($hora > $noche){
  $saludo = "Buenas noches";
}
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
  $inactivo = 300; // 15 minutos
  // calculo tiempo y se resta lo inactivo
  $tiempo = time() - $_SESSION['time'];
  // verificar el tiempo inactivo dentro del aplicativo
  if($tiempo > $inactivo){
    // actualizar el campo online
    $on = "UPDATE Usuarios SET Online = '0' WHERE Id_Usuarios = $Online";
    $line = $conect->query($on);
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
