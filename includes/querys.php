<?php
error_reporting(0);
// consulta para extraer las fechas de los registros de usuarios 
$RegUserF = "SELECT Fecha_Registro, Tuser FROM Usuarios ORDER BY Fecha_Registro";
$ResultReg = $conect->query($RegUserF);
$ValoresX = array();// Tipos de usuarios
$ValoresY = array();// fechas de registro
 while($lineasGrafica = $ResultReg->fetch_row()){
     $ValoresX[]=$lineasGrafica[1];
     $ValoresY[]=$lineasGrafica[0];
 }
 $datosX= json_encode($ValoresX);
 $datosY= json_encode($ValoresY);
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
U.Numero, U.Colonia, U.Id_Estado, U.Id_Municipio, U.Latitud, U.Longitud, U.UserName, U.Imagen, U.Password, U.Estatus, U.TUser,U.Fecha_Registro,U.Online,
G.Id_Genero, G.NombreG, E.Id_Estado, E.NombreE, M.Id_Municipios, M.NombreM, TU.Id_TuserApp, TU.AppTuser, TU.DescripcionT FROM Usuarios U INNER JOIN Genero G ON  U.Id_Genero = G.Id_Genero 
INNER JOIN Estados E ON U.Id_Estado = E.Id_Estado INNER JOIN Municipios M ON U.Id_Municipio = M.Id_Municipios INNER JOIN TUsuario TU ON U.TUser = TU.Id_TuserApp";
$verificarUser = $conect->query($unirUser);
// consulta para extraer tipo de oficio 
$oficio = "SELECT * FROM Oficios ORDER BY NombreOf ASC";
$oficios = $conect->query($oficio);
$Toficios = $oficios->num_rows;
// consulta para la paginación de oficios en administración
$Tpaginas = '10';
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
$solicitud = "SELECT * FROM SolicitudService ORDER BY Id_Solicitud";
$solicitudes = $conect->query($solicitud);
$Tsolicitudes = $solicitudes->num_rows;
$FolioSolicitud = $solicitudes->num_rows;
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
// consultar si el usuario cuanta con cuenta con un expediente
$q = "SELECT * FROM Expediente ORDER BY Id_Expediente";
$r = $conect->query($q);
$PEx = $r->num_rows;
// consulta inner join de expediente
$rowExpediente = "SELECT Ex.Id_Expediente, Ex.Id_UserExp, Ex.FechaExp, Ex.Id_OficioUser, Ex.NumCredencial, Ex.DocCredencial, Ex.DocDomicilio, Ex.Id_Banco, Ex.NCuenta, Ex.Id_FPago, Ex.Id_EstaExp,
User.Id_Usuarios, User.Nombre, User.ApellidoP, User.ApellidoM, User.Telefono, User.Email, User.Id_Genero, User.FNac, User.Latitud, User.Longitud, Of.Id_Oficio, Of.NombreOf, Bank.Id_Bancos, Bank.NombreBanco, Pago.Id_TPago, Pago.DescripcionPago, Ext.Id_EstatusExp, Ext.NomEstatus FROM Expediente Ex INNER JOIN Usuarios User ON Ex.Id_UserExp = User.Id_Usuarios 
INNER JOIN Oficios Of ON Ex.Id_OficioUser = Of.Id_Oficio INNER JOIN Bancos Bank ON  Ex.Id_Banco = Bank.Id_Bancos INNER JOIN TPago Pago ON Ex.Id_FPago = Pago.Id_TPago INNER JOIN EstatusExp Ext On Ex.Id_EstaExp = Ext.Id_EstatusExp";
$EjecExpediente = $conect->query($rowExpediente);
$DatosExp = $EjecExpediente->fetch_array();
// consultas para extrar la información de los expedientes con paginadores
// consulta para el paginador de oficios
$TExpedietesxpag = '10';
$inicioPExp = ($_GET['pagina']-1)*$TExpedietesxpag;
$PExpediente = "SELECT E.Id_Expediente,E.Id_UserExp,E.FechaExp,E.Id_OficioUser,E.NumCredencial,E.DocCredencial,E.DocDomicilio,E.Id_Banco,E.NCuenta,E.Id_FPago,E.Id_EstaExp,
U.Id_Usuarios,U.Nombre,U.ApellidoP,U.ApellidoM,U.Telefono,U.Email,U.Id_Genero,U.FNac,U.Calle,U.Numero,U.Colonia,U.Id_Estado,U.Id_Municipio,U.Latitud,U.Longitud,U.UserName,U.Imagen,U.Estatus,U.TUser,U.Online,G.Id_Genero,G.NombreG,Es.Id_Estado,Es.NombreE,Mu.Id_Municipios,Mu.NombreM,TUser.Id_TuserApp,TUser.AppTuser,O.Id_Oficio,O.NombreOf,B.Id_Bancos,B.NombreBanco,P.Id_TPago,P.DescripcionPago,EstEx.Id_EstatusExp,EstEx.NomEstatus
FROM Expediente E INNER JOIN Usuarios U  ON E.Id_UserExp = U.Id_Usuarios INNER JOIN Genero G ON U.Id_Genero = G.Id_Genero INNER JOIN Estados Es ON U.Id_Estado =  Es.Id_Estado INNER JOIN Municipios Mu ON U.Id_Municipio = Mu.Id_Municipios INNER JOIN TUsuario TUser ON U.TUser = TUser.Id_TuserApp INNER JOIN Oficios O ON E.Id_OficioUser = O.Id_Oficio INNER JOIN Bancos B ON E.Id_Banco = B.Id_Bancos INNER JOIN TPago P ON E.Id_FPago = P.Id_TPago INNER JOIN EstatusExp EstEx ON E.Id_EstaExp = EstEx.Id_EstatusExp";
$EjExpedientes = $conect->query($PExpediente);
$TExpedientesP = $EjExpedientes->num_rows;
$paginacionEx = $PEx/$TExpedietesxpag;
$paginacionEx = ceil($paginacionEx);
?>