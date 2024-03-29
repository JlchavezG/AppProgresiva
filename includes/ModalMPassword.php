<div class="modal fade" id="MPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-light">
         <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modificar Password de Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
            <div class="modal-body">
               <input type="hidden" name="IdPass" value="<?php echo $separar['Id_Usuarios']; ?>">
               <div class="input-group flex-nowrap">
                  <span class="input-group-text" id="addon-wrapping">
                     <svg class="bi" width="15" height="15" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill" />
                     </svg>
                  </span>
                  <input type="password" class="form-control" name="PasswordAc" placeholder="Password Actual" aria-label="Password" required>
               </div>
               <div class="input-group flex-nowrap mt-2">
                  <span class="input-group-text" id="addon-wrapping">
                     <svg class="bi" width="15" height="15" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#key-fill" />
                     </svg>
                  </span>
                  <input type="password" class="form-control" name="NewPassword" placeholder="Nuevo Password" aria-label="Password" required>
               </div>
               <div class="input-group flex-nowrap mt-2">
                  <span class="input-group-text" id="addon-wrapping">
                     <svg class="bi" width="15" height="15" fill="currentColor">
                        <use xlink:href="library/icons/bootstrap-icons.svg#key-fill" />
                     </svg>
                  </span>
                  <input type="password" class="form-control" name="PasswordCon" placeholder="Confirma tu Password" aria-label="Password" required>
               </div>
            </div>
            <div class="modal-footer">
               <input type="submit" name="MoPassword" value="Modificar" class="btn btn-sm btn-primary bg-gradient rounded-pill">
            </div>
         </form>
      </div>
   </div>
</div>