<?php
$HostBd = "localhost";
$NombreBd = "Hsoft";
$UsuarioBd = "admin";
$PasswordBd = "";
$FechaResBd = date('Ymd_His');
$Nombre_sql = $NombreBd. '_'.$FechaResBd.'.sql';
$dump = "mysqldump -h$HostBd -u$UsuarioBd -p$PasswordBd $NombreBd > $Nombre_sql";
exec($dump); 

?>