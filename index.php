<?php
error_reporting(0);
session_start();
include 'includes/conection.php';
if(isset($_POST['ingresar'])){
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
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <title>Inicio de Sistema | ServicePlubic</title>
  </head>
  <body>
  <div class="container">
      <div class="row d-flex justify-content-center">
           <h2 class="text-center display-6 mt-5">Inicio de Sesión | <span class="text-warning">Login</span></h2>
           <div class="col-sm-10 col-md-8 col-lg-8 py-5">
                  <div class="card shadow">
                      <div class="row">
                          <div class="container">
                             <div class="row py-2">
                                  <div class="col-sm-6 col-md-6 col-lg-6 text-center mt-3">
                                      <img src="img/craken.png" alt="logo" style="width:250px;">
                                      <div class="row">
                                         <div class="col">
                                           <svg class="bi" width="15" height="15" fill="currentColor">
                                              <use xlink:href="app/icons/bootstrap-icons.svg#facebook"/>
                                           </svg>
                                           <svg class="bi" width="15" height="15" fill="currentColor">
                                              <use xlink:href="app/icons/bootstrap-icons.svg#twitter"/>
                                           </svg>
                                           <svg class="bi" width="15" height="15" fill="currentColor">
                                              <use xlink:href="app/icons/bootstrap-icons.svg#instagram"/>
                                           </svg>
                                         </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-6 col-md-6 col-lg-6">
                                      <div class="container mt-3">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                          <span>Por favor ingresa tus credenciales para ingresar a la aplicación.</span><hr>
                                          <div class="input-group flex-nowrap mt-2">
                                             <span class="input-group-text" id="addon-wrapping">
                                               <svg class="bi" width="20" height="20" fill="currentColor">
                                                  <use xlink:href="app/icons/bootstrap-icons.svg#person-fill"/>
                                               </svg>
                                             </span>
                                                <input type="text" class="form-control" name="usuario" placeholder="Usuario" aria-label="Usuario" aria-describedby="addon-wrapping" required>
                                          </div>
                                          <div class="input-group flex-nowrap mt-2">
                                             <span class="input-group-text" id="addon-wrapping">
                                               <svg class="bi" width="20" height="20" fill="currentColor">
                                                  <use xlink:href="app/icons/bootstrap-icons.svg#key-fill"/>
                                               </svg>
                                             </span>
                                                <input type="password" name="password" id="pass" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" required>
                                          </div>
                                          <div class="d-grid gap-2 mt-2">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="ver" onclick="verpass(this);">
                                                <label class="form-check-label" for="ver">
                                                  <span>ver password</span>
                                                </label>
                                            </div>
                                          </div>
                                          <div class="d-grid gap-2 mt-2">
                                             <input type="submit" name="ingresar" value="Ingresar" class="btn btn-sm btn-success bg-gradient">
                                          </div>
                                          <div class="row mt-3">
                                             <div class="col-auto">
                                                <span class="text-primary">
                                                    <svg class="bi" width="20" height="20" fill="currentColor">
                                                      <use xlink:href="app/icons/bootstrap-icons.svg#person-plus-fill"/>
                                                    </svg> Registrate
                                                </span>
                                             </div>
                                             <div class="col-auto">
                                                <span class="text-primary">
                                                   <svg class="bi" width="20" height="20" fill="currentColor">
                                                      <use xlink:href="app/icons/bootstrap-icons.svg#gear-fill"/>
                                                   </svg> Perdiste tu Password
                                                 </span>
                                             </div>
                                          </div>
                                        </form><hr>
                                      </div>
                                  </div>
                             </div>
                          </div>
                      </div>
                   </div>
                   <div class="mt-2">
                       <?php echo $alerta; ?>
                   </div>
            </div>
        </div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script>
  function verpass(cb){
    if(cb.checked)
    $('#pass').attr("type","text");
    else
    $('#pass').attr("type","password");
  }
  </script>
  </body>
</html>
