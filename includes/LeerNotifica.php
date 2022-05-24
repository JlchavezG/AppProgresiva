<?php 
session_start();
include 'conection.php';
include 'querys.php';
$IdNot = $_GET['Id_Mensajes'];
$UpNotifica = "UPDATE Mensajes SET StatusN = '1' WHERE Id_Mensajes = '$IdNot'";
$EjUpNotifica = $conect->query($UpNotifica);
if($EjUpNotifica > 0){
    header("location:../NotificacioneSist.php");
}
else{
    echo "Error al leer el Mensaje intenta más tarde";
}

?>