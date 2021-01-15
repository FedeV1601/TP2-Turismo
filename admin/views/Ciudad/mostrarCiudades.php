
    <?php require __DIR__ . '/../../../header.php';?>
  <h1 class= "display-4 text-center mb-3">Ciudades</h1>

<div class="container">
    <button type="button" class="btn btn-dark btn-lg">
             <i class="fas fa-arrow-circle-left"></i>
            <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
    </button>
      <div class="row my-3">
         <div class=" col-6 text-center ">
              <form action="mostrarCiudad.controller.php" method="GET">
                <div class="input-group">
                  <select class="custom-select" name="orden">
                        <option value="asc" selected>Ordenar de forma Ascendente</option>
                        <option value="desc">Ordenar de forma Descendente</option>>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Ordenar</button>
                    </div>
                </div> <!-- input -->
              </form>
        </div> <!-- col -->
        <div class=" col-6">
            <form class="form-inline my-2 my-lg-0 " method="GET" action="/TP2-Turismo/admin/php/controllers/Ciudad/mostrarCiudad.controller.php">
                <input class="form-control mr-2" type="search" name="busqueda"  placeholder="Buscar" aria-label="Buscar">
                <input type="hidden" name="orden" value="asc"> 
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Buscar</button>
            </form>
        </div> <!-- col -->
      </div> <!-- row -->
    <div class="row ">
      <?php foreach($ciudades as $ciudad): ?>
        <div class="col-4">
            <div class="card mb-5">
              <img class="card-img-top" width="280" height="200" src="../../../../img/ciudades/<?php echo $ciudad->imagen?>" alt="<?php echo $ciudad->imagen?>">
                <div class="card-body">
                  <a href="/TP2-Turismo/admin/php/controllers/Hotel/mostrarHoteles.controller.php?id_ciudad=<?php echo $ciudad->id_ciudad?>"> <h3 class="card-title"><?php echo $ciudad->nombre?></h3></a>
                </div>
            </div>
          </div> <!-- col -->
          <?php endforeach; ?>
    </div> <!-- row -->

        <!-- PAGINACION -->
          <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                  <?php for($i =1; $i<=$botones; $i++): ?>
                      <li class="page-item"><a class="page-link" href="/TP2-Turismo/admin/php/controllers/Ciudad/mostrarCiudad.controller.php?<?php if(isset($_GET['busqueda'])):?><?php echo 'busqueda='.$_GET['busqueda'].'&'; endif;?><?php if(isset($_GET['orden'])):?><?php echo 'orden='.$_GET['orden'].'&'; endif;?>pagina=<?php echo $i;?>"><?php echo $i;?></a></li>
                  <?php endfor;?>
              </ul>
          </nav>
        <!-- FIN PAGINACION -->

</div> <!-- container -->
<?php require __DIR__ . '/../../../footer.php';?>
