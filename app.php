<?php
 include 'includes/conection.php';
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Optimizar sitio para movil -->
    <meta name="MobileOptimizer" content="width">
    <!-- Optimizo el sitio web para mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Descripción del sitio web o plataforma -->
    <meta name="description" content="WebApp Progresiva Online para realizar y contratar servicios tecnicos especilizados deacuerdo al area geografica y puntuación de los ofertantes garantizando un servicio y brindando una fuente te trabajo extra a nustros ofertantes y acercando los servicios de una manera sencilla a nuestros usuarios">
    <!-- palabras clave -->
    <meta name="keywords" content="Sistema de recerva de servicios online, servicio de albañileria, plomeria, carpinteria, electricidad, Conalep Naucalpan I, Gestion de servicios">
    <!-- autor del sitio web -->
    <meta name="autor" content="Gatech Asesor & tecnología and iscjoseluischavezg.mx">
    <!-- Integrar framworks para el desarrollo de el sistema -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pace.css">
    <link rel="stylesheet" href="css/tapOnline.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title> ServicePlubic |  Dashboard</title>
  </head>
  <body>
  <!--  validar el tipo de usuario para el sidebar del sistema  -->
  <?php include 'includes/menuSistemas.php'; ?>
  <!-- termina sidebar del sistema -->
  <!-- contenedor principal -->
  <div id="page-content-wrapper">
  <!-- navbar barra de opciones del sistema -->
  <?php include 'includes/navbar.php'; ?>
  <!-- termina la barra de opciones del sistema -->
  <!-- contenedor de contenido -->
     <div class="container py-4">
     <!-- tab de usuarios online -->
     <?php include 'includes/tabOnline.php';?>
     <!-- termina el tab -->
     <!-- dasboard -->

     <!-- termina contenedor de contenido -->
     </div>
  </div>
  <!-- termina contenedor principal -->
  <!-- inician script -->
  <script>
  // menuSlider
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  </script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/pace.js"></script>
  <script src="js/dark-mode.js"></script>
  </body>
</html>
