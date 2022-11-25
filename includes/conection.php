<?php
$Host = "localhost"; // servidor
$UserHost = "root"; // usuario
$Database = "Hsoft"; // base de datos 
$Password = ""; // password 
$conect = mysqli_connect($Host,$UserHost,$Password,$Database);
if($conect->connect_errno){
  die('Error al conectar la base de datos del aplicativo'.$conecta->connect_error);
}
?>
