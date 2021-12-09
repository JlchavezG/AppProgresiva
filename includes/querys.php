<?php
// consulta para extrar los datos de genero 
$g = "SELECT * FROM Genero ORDER BY Id_Genero";
$genero = $conect->query($g);
// consulta para extraer los datos de estado 
$estado = "SELECT * FROM Estados ORDER BY NombreE ASC";
$estados = $conect->query($estado);
// consulta para extraer tipo de oficio 
$oficio = "SELECT * FROM Oficios ORDER BY NombreOf ASC";
$oficios = $conect->query($oficio);
// consulta para saber el numero de usuarios registrados 
$usuario = "SELECT * FROM Usuarios ORDER BY Id_Usuarios";
$uuarios = $conect->query($usuario);
$Tusuarios = $uuarios->num_rows;




?>