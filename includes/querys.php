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
$usuarios = $conect->query($usuario);
$Tusuarios = $usuarios->num_rows;
// consulta para saber el numero de socios registrados 
$socio = "SELECT * FROM Ofertante ORDER BY Id_Ofertante";
$socios = $conect->query($socio);
$Tsocios = $socios->num_rows;
// consulta para saber el numero de solicitudes registrados 
$solicitud = "SELECT * FROM Solicitud ORDER BY Id_Solicitud";
$solicitudes = $conect->query($solicitud);
$Tsolicitudes = $solicitudes->num_rows;
// consulta para saber el numero de cancelaciones registrados 
$cancelacion = "SELECT * FROM Cancelaciones ORDER BY Id_cancelacion";
$cancelaciones = $conect->query($cancelacion);
$Tcancelaciones = $cancelaciones->num_rows;
?>