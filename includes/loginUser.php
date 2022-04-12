<?php
error_reporting(0);
session_start();
include 'conection.php';
if(isset($_POST['ingresar'])){
  $Accion = "Ingreso a la plataforma";
  $Accion1 = "Salida de la plataforma";
  $usuario = $conect->real_escape_string($_POST['usuario']);
  $password = $conect->real_escape_string(md5($_POST['password']));
  $q = "SELECT * FROM Usuarios WHERE UserName = '$usuario' and Password = '$password' and Estatus = '1'";
  if ($resultado = $conect->query($q)) {
    while ($row = $resultado->fetch_array()) {
      $userok = $row['UserName'];
      $passwordok = $row['Password'];
    }
      $resultado->close();
    }
    $conect->close();
      if (isset($usuario) && isset($password)) {
          if ($usuario == $userok && $password == $passwordok) {
               $_SESSION['loguin']= TRUE;
               $_SESSION['Usuario'] = $usuario;
               header("location:app.php");
             }
           else {
              $alerta.="<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'>
                           <svg class='bi text-danger' width='20' height='20' role='img' aria-label='Tools'>
                             <use xlink:href='library/icons/bootstrap-icons.svg#x-circle-fill'/>
                           </svg>
                           <strong> Usuario y/o password invalido</strong> Por favor verifica tus credenciales o contacta a soporte.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                }
             }
         else {
        header("location:index.php");
          }
      }
?>