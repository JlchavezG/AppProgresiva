<div class="col py-2 mt-3">
                <a href="app.php" class="text-decoration-none text-muted"><svg class="bi text-danger" width="30" height="30" fill="currentColor">
                     <use xlink:href="library/icons/bootstrap-icons.svg#arrow-bar-left"/>
                </svg> Salir </a>
          </div>
      <div class="row mt-3 py-3">
          <h3 class="text-muted text-center display-6">Catalogo de servisios dentro de <span class="text-warning">Iscjlchavezg</span></h3>
      </div>    
      <div class="row mt-3 py-3">
      <?php while($DatoOf = $oficiosP->fetch_array()){ ?>  
          <div class="col-sm-3 col-md-3 col-lg-3 py-3">
              <a href="ListaSociosOficio.php?Id_Oficio=<?php echo $DatoOf['Id_Oficio'];?>" class="text-decoration-none text-secondary">
                <div class="card shadow bg-light CardHover rounded-pill">
                  <div class="container text-center">  
                     <div class="row py-3">
                         <div class="text-center"><?php echo $DatoOf['NombreOf']; ?></div>
                     </div> 
                  </div>
              </div>
          </div></a>
          <?php } ?>
      </div>
      <div class="row">
       <nav aria-label="Page navigation">
           <ul class="pagination pagination-sm">
              <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : '' ?>">
                 <a class="page-link" href="AppCatalogo.php?pagina=<?php echo $_GET['pagina']-1 ?>">
                    Anterior
                 </a>
              </li>
              <?php for($i=0; $i<$paginacion; $i++ ){ ?>
              <li class="page-item  <?php echo $_GET['pagina']==$i+1 ?'active' : '' ?>">
                  <a class="page-link" href="AppCatalogo.php?pagina=<?php echo $i+1; ?>">
                    <?php echo $i+1; ?>
                  </a>
              </li>
              <?php } ?>
              <li class="page-item <?php echo $_GET['pagina']>=$paginacion? 'disabled' : '' ?>">
                  <a class="page-link" href="AppCatalogo.php?pagina=<?php echo $_GET['pagina']+1 ?>">
                     Siguiente
                  </a>
              </li>
           </ul>
       </nav>
     </div>
  </div> 
  