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
// consulta para extraer los tipos de usario de la tabla Tuser 
$TipoUsuarios = "SELECT * FROM TUsuario ORDER BY Id_TuserApp";
$TUsuariosQuery = $conect->query($TipoUsuarios);
// consulta cruzda para extrar todos los datos del usuario 
$unirUser = "SELECT U.Id_Usuarios, U.Nombre, U.ApellidoP, U.ApellidoM, U.Telefono, U.Email, U.Id_Genero, U.FNac, U.Calle,
U.Numero, U.Colonia, U.Id_Estado, U.Id_Municipio, U.Latitud, U.Longitud, U.UserName, U.Imagen, U.Password, U.Estatus, U.TUser, U.Online,
G.Id_Genero, G.NombreG, E.Id_Estado, E.NombreE, M.Id_Municipios, M.NombreM, TU.Id_TuserApp, TU.AppTuser, TU.DescripcionT FROM Usuarios U INNER JOIN Genero G ON  U.Id_Genero = G.Id_Genero 
INNER JOIN Estados E ON U.Id_Estado = E.Id_Estado INNER JOIN Municipios M ON U.Id_Municipio = M.Id_Municipios INNER JOIN TUsuario TU ON U.TUser = TU.Id_TuserApp";
$verificarUser = $conect->query($unirUser);
// consulta para extraer tipo de oficio 
$oficio = "SELECT * FROM Oficios ORDER BY NombreOf ASC";
$oficios = $conect->query($oficio);
$Toficios = $oficios->num_rows;
// consulta para la paginación de oficios en administración
$Tpaginas = '12';
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
$TotalRow = $Usuarios->num_rows;
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
$notificacion = "SELECT * FROM Mensajes WHERE StatusN = '0'";
$notificaciones = $conect->query($notificacion);
$Tnotificaciones = $notificaciones->num_rows;
// consulta para extraer los bancos
$Banco = "SELECT * FROM Bancos ORDER BY NombreBanco ASC";
$Bancos = $conect->query($Banco);
// Consulta para extraer los tipos de pago 
$Tpago = "SELECT * FROM TPago ORDER BY DescripcionPago ASC";
$Tpagos = $conect->query($Tpago);
// consulta para extraer todas las notificaciones
$E = "SELECT * FROM Mensajes ORDER BY FechaN";
$Ej = $conect->query($E);
// consulta para el paginador de oficios


// consultar si el usuario cuanta con cuenta con un expediente
$IdUserExpediente = $user['TUser'];
// consulta inner join de expediente
$rowExpediente = "SELECT Ex.Id_Expediente, Ex.Id_UserExp, Ex.FechaExp, Ex.Id_OficioUser, Ex.NumCredencial, Ex.DocCredencial, Ex.DocDomicilio, Ex.Id_Banco, Ex.NCuenta, Ex.Id_FPago, Ex.Id_EstaExp,
User.Id_Usuarios, User.Nombre, User.ApellidoP, User.ApellidoM, Of.Id_Oficio, Of.NombreOf, Bank.Id_Bancos, Bank.NombreBanco, Pago.Id_TPago, Pago.DescripcionPago, Ext.Id_EstatusExp, Ext.NomEstatus FROM Expediente Ex INNER JOIN Usuarios User ON Ex.Id_UserExp = User.Id_Usuarios 
INNER JOIN Oficios Of ON Ex.Id_OficioUser = Of.Id_Oficio INNER JOIN Bancos Bank ON  Ex.Id_Banco = Bank.Id_Bancos INNER JOIN TPago Pago ON Ex.Id_FPago = Pago.Id_TPago INNER JOIN EstatusExp Ext On Ex.Id_EstaExp = Ext.Id_EstatusExp WHERE Id_UserExp = '$IdUserExpediente'";
$EjecExpediente = $conect->query($rowExpediente);
$DatosExp = $EjecExpediente->fetch_array();




?>