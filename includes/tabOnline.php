<div id="slideOut">
    <!-- Tab -->
    <div class="slideOutTab">
        <div>
            <p>Usuarios Online</p>
         </div>
    </div>
    <div class="modal-content">
       <div class="modal-header">
            <div class="modal-body overflow-auto">
               <p class="text-center text-muted">conectados Online <?php echo $numero;?></p><hr>
                      <?php while($row = $conectados->fetch_assoc()) { ?>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="icon-network text-success"> <?php echo $row['Nombre']; ?> <?php echo $row['ApellidoP']; ?></span> </li>
                        </ul>
                      <?php } ?>
               </form>
             </div>
      </div>
   </div>
 </div>
