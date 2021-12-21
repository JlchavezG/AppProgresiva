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
// consulta para extraer el numero de usuarios conectados 
$OnlineUsuario = "SELECT * FROM Usuarios WHERE Online = '1'";
$OnlineUsuarios = $conect->query($OnlineUsuario);
$TOnlineUsuarios = $OnlineUsuarios->num_rows;
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
// consulta para saber el numero de tikets de soporte registrados
$ticket = "SELECT * FROM Tiket_Sporte ORDER BY Id_Ticket";
$tickets = $conect->query($ticket);
$Ttickets = $tickets->num_rows;
// consulta para saber el numero de notificaciones activas 
$notificacion = "SELECT * FROM Notificaciones WHERE StatusN = '0'";
$notificaciones = $conect->query($notificacion);
$Tnotificaciones = $notificaciones->num_rows;
// consulta iner join para obtener datos del usuario 
$Inner = "SELECT U.Id_Usuarios, U.Nombre, U.ApellidoP, U.ApellidoM, U.Telefono, U.Email, U.Id_Genero, U.FNac,
U.Calle, U.Numero, U.Colonia, U.Id_Estado, U.Id_Municipio, U.Latitud, U.Longitud, U.UserName, U.Imagen, U.Estatus, U.TUser, U.Online,
G.Id_Genero, G.NombreG, E.Id_Estado, E.NombreE, M.Id_Municipios, M.NombreM, T.Id_TuserApp, T.AppTuser, T.DescripcionT FROM Usuarios AS U INNER JOIN Genero AS G
ON U.Id_Genero = G.Id_Genero INNER JOIN Estados AS E ON U.Id_Estado = E.Id_Estado INNER JOIN Municipios AS M ON U.Id_Municipio = M.Id_Municipios INNER JOIN TUsuario AS T ON 
U.TUser = T.Id_TuserApp WHERE Id_Usuarios = $Online";
$join = $conect->query($Inner);
$DatoPerfil = $join->fetch_assoc();
?>