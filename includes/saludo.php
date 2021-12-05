<?php
$hora = date('G'); 
switch ($hora) {
   case (($hora >= 6) AND ($hora < 12)):
        $mensaje = "Buenos dias";
         break;
   case (($hora >= 12) AND ($hora < 18)):
         $mensaje = "Buenas tardes"; 
         break;
   case (($hora >= 0) AND ($hora < 6)):
         $mensaje = "Buenas Noches"; 
         break;
}
?>