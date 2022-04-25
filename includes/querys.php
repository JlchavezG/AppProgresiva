<?php
error_reporting(0);
// consulta para extrar los datos de genero 
$g = "SELECT * FROM Genero ORDER BY Id_Genero";
$genero = $conect->query($g);
// consulta para extraer los datos de estado 
$estado = "SELECT * FROM Estados ORDER BY NombreE ASC";
$estados = $conect->query($estado);
// consulta para estraer el oficio a modificar 
$Id_Of = $_GET['Id_Oficio'];
$OficioM = "SELECT * FROM Oficios WHERE Id_Oficio = '$Id_Of'";
$OficiosM = $conect->query($OficioM);
$separarOf = $OficiosM->fetch_array();
// consulta para extraer tipo de oficio 
$oficio = "SELECT * FROM Oficios ORDER BY NombreOf ASC";
$oficios = $conect->query($oficio);
$Toficios = $oficios->num_rows;
// consulta para la paginación de oficios en administración
$Tpaginas = '5';
$inicioP = ($_GET['pagina']-1)*$Tpaginas;
$oficioP = "SELECT * FROM Oficios ORDER BY NombreOf ASC LIMIT ".$inicioP.",".$Tpaginas;
$oficiosP = $conect->query($oficioP);
$ToficiosP = $oficiosP->num_rows;
$paginacion = $Toficios/$Tpaginas;
$paginacion = ceil($paginacion);

// consulta para extraer el numero de super usuarios
$SuperUsuario = "SELECT * FROM Usuarios WHERE TUser = '1'";
$SuperUsuarios = $conect->query($SuperUsuario);
$TSuperUsuarios = $SuperUsuarios->num_rows;
// consulta para extraer el numero de usuarios gerenciales
$UserGerente = "SELECT * FROM Usuarios WHERE TUser = '2'";
$UserGerentes = $conect->query($UserGerente);
$TUserGerentes = $UserGerentes->num_rows;
// consulta para extraer el numero de socios premium 
$SocioP = "SELECT * FROM Usuarios WHERE TUser = '3'";
$SociosP = $conect->query($SocioP);
$TSociosP = $SociosP->num_rows;
// consulta para extraer el numero de socios free
$SocioF = "SELECT * FROM Usuarios WHERE TUser = '5'";
$SociosF = $conect->query($SocioF);
$TSociosF = $SociosF->num_rows;
// consulta para extraer el numero de usuarios premium
$UsuarioP = "SELECT * FROM Usuarios WHERE TUser = '4'";
$UsuariosP = $conect->query($UsuarioP);
$TUsuariosP = $UsuariosP->num_rows;
// consulta para extraer el numero de usuarios Free
$UsuarioF = "SELECT * FROM Usuarios WHERE TUser = '6'";
$UsuariosF = $conect->query($UsuarioF);
$TUsuariosF = $UsuariosF->num_rows;
// consulta para extraer el numero de usuarios conectados 
$OnlineUsuario = "SELECT * FROM Usuarios WHERE Online = '1'";
$OnlineUsuarios = $conect->query($OnlineUsuario);
$TOnlineUsuarios = $OnlineUsuarios->num_rows;
// consulta para saber el numero de socios registrados 
$socio = "SELECT * FROM Usuarios WHERE TUser = '5'";
$socios = $conect->query($socio);
$Tsocios = $socios->num_rows;
//consulta usuarios registrados en la plataforma
$Usuario = "SELECT * FROM Usuarios ORDER BY Nombre ASC";
$Usuarios = $conect->query($Usuario);
// consulta para saber el numero de solicitudes registrados 
$solicitud = "SELECT * FROM Solicitud ORDER BY Id_Solicitud";
$solicitudes = $conect->query($solicitud);
$Tsolicitudes = $solicitudes->num_rows;
// consulta para saber el numero de cancelaciones registrados 
$cancelacion = "SELECT * FROM Solicitud WHERE Id_Estatus = '5'";
$cancelaciones = $conect->query($cancelacion);
$Tcancelaciones = $cancelaciones->num_rows;
// consulta para saber el numero de tikets de soporte registrados
$ticket = "SELECT * FROM Tiket_Sporte ORDER BY Id_Ticket";
$tickets = $conect->query($ticket);
$Ttickets = $tickets->num_rows;
// consulta para saber el numero de notificaciones activas 
$notificacion = "SELECT * FROM Notificaciones WHERE StatusN = '0'";
$notificaciones = $conect->query($notificacion);
$Tnotificaciones = $notificaciones->num_rows;
// consulta para extraer los oficios 
$Oficio = "SELECT * FROM Oficios ORDER BY NombreOf";
$ROficio = $conect->query($Oficio);
?>