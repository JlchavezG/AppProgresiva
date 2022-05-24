<?php
error_reporting(0);
include 'includes/conection.php';
if(isset($_GET['guardar'])){
$id = $_GET['id'];
$pass = $_GET['npass'];
$correo = $_GET['email'];
$newpass = md5($pass);
$mensaje = "";
// consulta para modificar el password
$actualizar = "UPDATE Usuarios SET  Password = '$newpass' WHERE Id_Usuarios = '$id'";
$ejecuta = $conect->query($actualizar);
if($ejecuta > 0){
// vamos a enviar un email 
$para     = $correo;
$titulo   = 'Modificación de password rn la plataforma de Iscjlchavezg Service';
$mensaje  = 'Tu nuevo password es: '.$pass;
$cabezera = 'From: contacto@iscjoseluischavezg.mx'. "\r\n".
            'Reply-To: webmaster@iscjoseluischavezg.mx'. "\r\n".
            'X-Mailer: PHP/'.phpversion();
            mail($para, $titulo, $mensaje, $cabezera);
            $alerta.='<div class="alert alert-success alert-dismissible fade show" role="alert">
                         <strong>Tu nuevo password se envio a la dirección de correo electronico registrado en la plataforma.</strong> Por favor revisa tu bandeja de entrada o en la sección de no deceados.
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>';
}
}
else{
    header("location:../RecuperarPassUser.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="library/push/push.min.js"></script>
    <script src="js/jquery.js"></script>
    <title>Recuperar Password | iscjlchavezg</title>
</head>
<body>
<div class="container py-4">
    <div class="row justify-content-center h-100 py-4">
        <div class="card col-sm-8 col-md-8 col-lg-8 shadow bg-ligth">
        <p class="text-center text-muted py-2">Se modifico tu password exitosamente dentro de nuestra plataforma.</p><hr>
        <div class="container text-center">
            <div class="col py-1">
                <h4> Email: <?php echo $correo; ?></h4>
                <p>el nuevo password es: <?php echo $pass; ?></p>
            </div>
        </div>
        <div class="d-grid gap-2 py-3">
           <a href="index.php" class="btn btn-sm btn-success">Iniciar Sesión</a>
        </div>
    </div>
</div>
<div class="container py-2">
   <?php echo $alerta; ?>
</div>
</div>
<div class="container ">
        <div class="row d-flex justify-content-center mt-2">
           <img src="img/craken.png" alt="logo" style="width:100px;">
        </div>
    </div>
<script src="js/bootstrap.min.js"></script> 
</body>
</html>