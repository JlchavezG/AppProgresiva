<?php include 'includes/loginUser.php';?>
<?php include 'includes/saludo.php';?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/pace.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <script src="library/push/push.min.js"></script>
    <script src="js/jquery.js"></script>
    <title>Inicio de Sistema | ServicePlubic</title>
  </head>
  <body>
  <div class="row d-flex justify-content-center">
      <h2 class="text-center display-6 mt-5">Inicio de Sesión | <span class="text-warning">Login</span></h2>
         <div class="mt-1 text-center">
             <?php echo $mensaje; ?>
         </div>
         <div class="col-sm-10 col-md-10 col-lg-10 py-5">
                      <div class="row">
                          <div class="container">
                             <div class="row py-2 justify-content-center">
                                  <div class="col-sm-6 col-md-6 col-lg-6 text-center mt-3">
                                      <img src="img/craken.png" alt="logo" style="width:250px;">
                                      <div class="row">
                                         <div class="col">
                                           <a href="https://www.facebook.com/iscjoseluischavezg" target="_blank"><svg class="bi text-primary" width="20" height="20" fill="currentColor">
                                              <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                                           </svg></a>&nbsp;&nbsp;  
                                           <a href="https://twitter.com/iscjlchavezg" target="_blank"><svg class="bi text-info" width="20" height="20" fill="currentColor">
                                              <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                                           </svg></a>&nbsp;&nbsp; 
                                           <a href="https://www.instagram.com/iscjlchavezg" target="_blank"><svg class="bi" width="20" height="20" fill="currentColor">
                                              <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                                           </svg></a>
                                         </div>
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-md-6 col-lg-6 mt-2">
                                  <div>
                                      <div class="container mt-3">
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="needs-validation" novalidate method="post">
                                          <span>
                                            Por favor ingresa tus credenciales para ingresar a la aplicación.
                                          </span><hr>
                                          <div class="input-group flex-nowrap mt-2">
                                             <span class="input-group-text" id="addon-wrlibrarying">
                                               <svg class="bi" width="20" height="20" fill="currentColor">
                                                  <use xlink:href="library/icons/bootstrap-icons.svg#person-fill"/>
                                               </svg>
                                             </span>
                                                <input type="text" class="form-control" name="usuario" placeholder="Usuario" aria-label="Usuario" aria-describedby="addon-wrlibrarying" required>
                                                <div class="invalid-feedback">
                                                    Ingresa un usuario
                                                </div>
                                          </div>
                                          <div class="input-group flex-nowrap mt-2">
                                             <span class="input-group-text" id="addon-wrlibrarying">
                                               <svg class="bi" width="20" height="20" fill="currentColor">
                                                  <use xlink:href="library/icons/bootstrap-icons.svg#key-fill"/>
                                               </svg>
                                             </span>
                                                <input type="password" name="password" id="pass" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrlibrarying" required>
                                                <div class="invalid-feedback">
                                                    Ingresa un Email
                                                </div>
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
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ModalRegistro" class="text-decoration-none text-muted">
                                                      <svg class="bi" width="20" height="20" fill="currentColor">
                                                      <use xlink:href="library/icons/bootstrap-icons.svg#person-plus-fill"/>
                                                    </svg> Registrate </a>
                                                </span>
                                             </div>
                                             <div class="col-auto">
                                                <span class="text-primary">
                                                   <a href="RecuperarPassUser.php" class="text-decoration-none text-muted"><svg class="bi" width="20" height="20" fill="currentColor">
                                                      <use xlink:href="library/icons/bootstrap-icons.svg#gear-fill"/>
                                                   </svg> Perdiste tu Password </a>
                                                 </span>
                                             </div>
                                          </div>
                                        </form>
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
        <div class="container ">
            <div class="row d-flex justify-content-center mt-1 text-muted">
                Iscjlchavezg@2021 | Webdeveloper </a>
            </div>
        </div>
    </div>
  </div>
  <!--modal tipo de registro -->
  <div class="modal fade" id="ModalRegistro" tabindex="-1" aria-labelledby="ModalRegistroLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalRegistroLabel">Registro de Usuarios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="row py-3 text-center">
             <div class="col">
               <a href="AppRusuario.php" class="text-decoration-none"><svg class='bi' width='60' height='60' role='img' aria-label='Tools'>
                 <use xlink:href='library/icons/bootstrap-icons.svg#person-plus-fill'/>
               </svg>
               <div class="mt-2">
                  <span class="text-info">Crear Nueva Cuenta</span></a>
               </div>
             </div>
             
         </div>
       </div>
      <div class="modal-footer text-center">
        <p class="text-muted text-center"> Iscjlchavezg@2021 | Webdeveloper </a></p>
      </div>
    </div>
  </div>
</div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/pace.js"></script>
  <script src="js/validate.js"></script>
  <script>
  function verpass(cb){
    if(cb.checked)
    $('#pass').attr("type","text");
    else
    $('#pass').attr("type","password");
  }
  </script>
  <script src="js/dark-mode.js"></script>
  </body>
</html>
