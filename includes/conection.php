<?php
$Host = "localhost";
$UserHost = "root";
$Database = "Hsoft";
$Password = "";
$conect = mysqli_connect($Host,$UserHost,$Password,$Database);
if($conect->connect_errno){
  die('Error al conectar la base de datos del aplicativo'.$conecta->connect_error);
}
?>
