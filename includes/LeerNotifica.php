<?php 
session_start();
include 'conection.php';
include 'querys.php';
$IdNot = $_GET['Id_Notificación'];
$UpNotifica = "UPDATE Notificaciones SET StatusN = '1' WHERE Id_Notificación = '$IdNot'";
$EjUpNotifica = $conect->query($UpNotifica);
if($EjUpNotifica > 0){
    header("location:../Notificaciones.php");
}
else{
    echo "Error al leer la Notificacion intenta más tarde";
}

?>