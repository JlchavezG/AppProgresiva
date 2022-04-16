<?php
 include 'conection.php';
 $DropOficioId = $_GET['Id_Oficio'];
 // consulta para eliminar el oficio 
 $DropOficio = "DELETE FROM Oficios WHERE Id_Oficio = '$DropOficioId'";
 $DropOficios = $conect->query($DropOficio);
 header("location:../AppAdminOficios.php");
?>