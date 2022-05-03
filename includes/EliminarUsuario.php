<?php
 include 'conection.php';
 $DropUsuariosId = $_GET['Id_Usuarios'];
 // consulta para eliminar el oficio 
 $DropUser = "DELETE FROM Usuarios WHERE Id_Usuarios = '$DropUsuariosId'";
 $DropUsuarios = $conect->query($DropUser);
 header("location:../AppAdminOficios.php");
?>