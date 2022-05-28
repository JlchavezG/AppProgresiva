<select name="TUsuario">
<?php $Option = $user['TUser'];?>    
<option value="">Selecciona Una Opcion</option>
<?php  if($Option == '3'|| $Option == '5') { ?>
<?php while($Opciones = $oficios->fetch_assoc()){ ?>
    <option value="<?php echo $Opciones['Id_Oficio'];?>"><?php echo $Opciones['NombreOf'];?></option>
 <?php }?>
 <?php } else { ?>
    <option value="0">Socio</option>
 <?php }?>
</select>
<input type="text" name="latitud" id="latitud" required>
<input type="text" name="longitud" id="longitud" required>
<div id="map"></div>