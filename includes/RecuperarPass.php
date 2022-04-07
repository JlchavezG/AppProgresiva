<?php
error_reporting(0);
// iniciar la conexion
include 'conection.php';
// validar click en el boton buscar
if(isset($_POST['buscar'])){
// recuperar los datos que nos da el usuario atravez de la cajas de texto
$RecuperarUsuario = $conect->real_escape_string($_POST['usuario']);
$RecuperarEmail = $conect->real_escape_string($_POST['email']);
// generar la consulta para buscar el usuario, email si existe y dar respuesta al passsword
$buscar = "SELECT * FROM Usuarios WHERE Email = '$RecuperarEmail' and UserName = '$RecuperarUsuario'";
$EjecutaBusqueda = $conect->query($buscar);
$resultado = $EjecutaBusqueda->fetch_array();
$id = $resultado['Id_Usuarios'];
$email = $resultado['Email'];
if($resultado > 0){
  $alerta.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
               <strong>Datos Encontrados!</strong> Por favor ingresa el nuevo password.
               <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <div class='card shadow'>
              <div class='container py-3'>
              <form action='ModificarPassword.php' method='get'>
                 <div class='row pt-2'>
                     <input type='hidden' name='id' value='$id'>
                     <input type='hidden' name='email' value='$email'>
                     <div class='row'>
                        <div class='col'>
                           <input type='password' id='password' class='form-control' name='npass' placeholder='Nuevo Password' required>
                        </div>
                        <div class='col'>
                        <input type='password' id='passwordC' class='form-control' name='cpass' placeholder='Confirma tu Password' required>
                        </div>
                  </div>
              </div>
              <div class='row py-2'>
                  <input type='submit' name='guardar' value='Guardar nuevo password' class='btn btn-success btn-sm'>
              </div>
              </div>
              </form>
            </div>";
}
else{
  $alerta.='<div class="alert alert-danger" role="alert">
              No se en contraron datos de Usuario y/o Email en la plataforma  por favor <a href="mailto:contacto@iscjoseluischavezg.mx" class="text-decoration-none text-dark">Contacta a soporte tecnico</a>
            </div>';
 }
}
?>