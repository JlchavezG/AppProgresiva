<?php 
include "conection.php";
$IdExp = $_GET['Id_Expediente'];
echo $IdExp;
$Validando = "UPDATE Expediente SET Id_EstaExp = '2' WHERE Id_Expediente = $IdExp ";
$Validar = $conect->query($Validando);
if($Validar > 0){
    header("location:../AppAdminExpedientes.php");
}

?>