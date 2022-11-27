<div class="modal fade" id="ImagenModal" tabindex="-1" aria-labelledby="ImagenModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ImagenModalLabel">Selecciona la imagen de perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
           <input type="hidden" name="imgId" value="<?php echo $separar['Id_Usuarios']; ?>">
           <input type="file"  name="imagen" id="imagen" size="30" class="form-control" required> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" value="Mofificar Imagen" name="Subir" class="btn btn-sm btn-peimary rounded-pill">
        </form>
      </div>
    </div>
  </div>
</div>