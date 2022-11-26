<?php 
include 'conection.php';
// eliminar Notificaciones Sistemas
if(isset($_GET['Id_Mensajes'])){
   $Id_Borrar = $_GET['Id_Mensajes'];
   $Borrar = "DELETE FROM Mensajes WHERE Id_Mensajes = '$Id_Borrar'";
   $Borrando = $conect->query($Borrar);
    header("location:../NotificacioneSist.php");
}
else{
  return false;
}
?>