<?php 
include 'includes/conection.php';
include 'includes/Confing.php';
include 'includes/querys.php';
include 'includes/Acciones.php';
 // validar restriccion solo a sistemas
 $validar = $user['TUser'];
 if($validar != 1 || $validar == 2){
   header("location:library.php");
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
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="library/push/push.min.js"></script>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
				$("#estado").change(function () {					
					$("#estado option:selected").each(function () {
						   Id_Estado  = $(this).val();
						$.post("includes/getMunicipio.php", { Id_Estado: Id_Estado  }, function(data){
							$("#municipio").html(data);
						});            
					});
				})
			});
    </script>
    <title>Registro de Usuarios | IscjlchavezG</title>
</head>
<body onload="findMe()";>
 <!-- navbar -->
 <?php include 'includes/navbar.php'; ?>
  <!-- inicia sidebar -->
  <?php 
   $Tsidebar = $user['TUser'];
    if($Tsidebar == 1){include 'includes/SidebarSuperUser.php';}else if($Tsidebar == 2){include 'includes/SidebarGerente.php';}
    else if($Tsidebar == 3){include 'includes/SidebarSocioP.php';}else if($Tsidebar == 4){include 'includes/SidebarUsuarioP.php';}
    else if($Tsidebar == 5){include 'includes/SidebarSocioF.php';}else if($Tsidebar == 6){include 'includes/SidebarUsuarioF.php';}
  ?>
<!-- termina sidebar -->
<!-- inicia contenido -->

<?php include 'includes/RegUserSistesmas.php'; ?>
<?php include 'Ayuda/AyudaRegUser.php';?>
</div>  
<?php include 'includes/Terminos.php'; ?> 
<?php include 'includes/footer.php'; ?>
<script>
    // deabilitar el boton de registrar
    document.getElementById('registrar').disabled=true;
    function activar(cb){
        if(cb.checked)
        document.getElementById('registrar').disabled=false;
        else
        document.getElementById('registrar').disabled=true;
    }
    $('#password, #passwordC').on('keyup', function () {
       if ($('#password').val() == $('#passwordC').val()) {
       $('#message').html('Validacion de password').css('color', 'green');
  } else 
    $('#message').html('Verifica bien tu password no coincide').css('color', 'red');
});
</script>
<script src="js/main.js"></script> 
<script src="js/pace.js"></script>   
<script src="js/dark-mode.js"></script>
<script src="js/bootstrap.min.js"></script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMPGtM7VUn1aq61tkGbu99qD95c-w5zc&callback=initMap"></script>    
</body>
</html>