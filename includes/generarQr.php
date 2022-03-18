<?php
include 'app/phpqrcode';
include 'includes/Confing.php';
$id = $_GET['Id_Usuarios'];
// consulta para generar QR
      $dir = 'img/qr/';
      if (!file_exists($dir))
      mkdir($dir);
      {
        $filename = $dir.'user'.$dupla['Id_Usuarios'].'png';
        $tam = 4;
        $lavel = 'H';
        $frameSize = '3';
        $Qrnom = $dupla['Nombre'];
        $Qrnom1 = $dupla['ApellidoP'];
        $Qrnom2 = $dupla['ApellidoM'];
        $Qrtele = $dupla['Telefono'];
        $Qrcorreo = $dupla['Email'];
        $Qrcontenido = 'BEGIN:VCARD'."\n"
        . 'VERSION:2.1'."\n"
        . 'FN:'.$Qrnom. $Qrnom1. $Qrnom2."\n"
        .'TEL;WORK;VOICE:'.$Qrtele."\n"
        .'TITLE:'.$Tperfil."\n"
        .'EMAIL:'.$Qrcorreo."\n"
        . "END:VCARD";
        QRcode::png($Qrcontenido,$filename,$lavel,$tam,$frameSize);
      }
 ?>
?>