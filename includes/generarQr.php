<?php
   include 'app/phpqrcode/qrlib.php'; 
   $dir = 'img/qr/';
      if (!file_exists($dir))
      mkdir($dir);
      {
      // generar los datos del qr 
      $filename = $dir.'QRuser'.$separar['Id_Usuarios'].'png';
      $tam = 4;
      $lavel = 'H';
      $frameSize = '3';
      $name         = $separar['Nombre'];
      $ApellidoP    = $separar['ApellidoP'];
      $phone        = $separar['Telefono'];
      $userP        = $separar['AppTuser'];
      $orgName      = 'App Work Iscjlchavezg Inc.'; 
      $email        =  $separar['Email'];
      $addressLabel     = 'Datos de Contacto';
      $addressPobox     = '';
      $addressExt       = $separar['Calle'];
      $addressNumero    = $separar['Numero'];
      $addressStreet    = $separar['Colonia'];
      $addressTown      = $separar['NombreM'];
      $addressRegion    = $separar['NombreE'];
      $addressCountry   = 'México';
     
      $codeContents  = 'BEGIN:VCARD'."\n";
      $codeContents .= 'VERSION:2.1'."\n";
      $codeContents .= 'N:'.$userP ."\n";
      $codeContents .= 'FN:'.$name."\n";
      $codeContents .= 'ORG:'.$orgName."\n";

      $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n";
      $codeContents .= 'ADR;TYPE=work;'.
        'LABEL="'.$addressLabel.'":'
        .$addressPobox.';'
        .$addressExt.';'
        .$addressNumero.';'
        .$addressStreet.';'
        .$addressTown.';'
        .$addressRegion.';'
        .$addressCountry
        ."\n";
        $codeContents .= 'EMAIL:'.$email."\n";
        $codeContents .= 'END:VCARD';
        // generar la imagen del qr 
        QRcode::png($codeContents,$filename,$lavel,$tam,$frameSize);
      }
?>