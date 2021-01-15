
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Ciudades</title>

<!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/TP2-Turismo/css/estilos.css">
</head>
<body>
    <div class="container">
             <?php require __DIR__ .'/../../php/message/message.php';?>

                    <button type="button" class="btn btn-dark btn-lg">
                             <i class="fas fa-arrow-circle-left"></i>
                            <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
                    </button>
                    <div class="row my-3">
                        <div class=" col-4">
                            <a href="/TP2-Turismo/admin/views/Ciudad/addCiudad.php" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Agregar Ciudad</span></a></td>
                        </div>
                        <div class=" col-4 text-center ">
                            <form action="/TP2-Turismo/admin/php/controllers/Ciudad/ABMCiudad.controller.php" method="GET">
                                <div class="input-group">
                                    <select class="custom-select" name="orden">
                                         <option value="asc" selected>Ordenar de forma Ascendente</option>
                                         <option value="desc">Ordenar de forma Descendente</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">Ordenar</button>
                                    </div>
                                </div> 
                          </form>
                        </div>
                        <div class=" col-4">
                           <form class="form-inline my-2 my-lg-0 " method="GET" action="/TP2-Turismo/admin/php/controllers/Ciudad/ABMCiudad.controller.php">
                                <div class="input-group"> 
                                    <input class="form-control mr-2" type="search" name="busqueda"  placeholder="Buscar" aria-label="Buscar">
                                    <input type="hidden" name="orden" value="asc"> 
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Buscar</button>
                            
                                </div>
                            </form>
                        </div> <!-- col -->
                    </div> <!-- row -->
                <table class="table table-bordered striped">
                    <thead>
                        <tr>
                            <td>Ciudad</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach($ciudades as $ciudad): ?>
                            <tr>
                                <td><?php echo $ciudad->nombre; ?></td>
                                <td>
                                    <a href="/TP2-Turismo/admin/php/controllers/Ciudad/editCiudad.controller.php?id_ciudad=<?php echo $ciudad->id_ciudad?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="/TP2-Turismo/admin/php/controllers/Ciudad/deleteCiudad.controller.php?id_ciudad=<?php echo $ciudad->id_ciudad?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                     
                    </tbody>
                </table>
              
                <!-- PAGINACION -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center"><?php for($i =1; $i<=$botones; $i++): ?><li class="page-item"><a class="page-link" href="/TP2-Turismo/admin/php/controllers/Ciudad/ABMCiudad.controller.php?<?php if(isset($_GET['busqueda'])): echo 'busqueda='.$_GET['busqueda'].'&'; endif; if(isset($_GET['orden'])): echo 'orden='.$_GET['orden'].'&'; endif;?>pagina=<?php echo $i;?>"><?php echo $i;?></a></li>
                            <?php endfor;?>
                        </ul>
                    </nav>
                <!-- FIN PAGINACION -->
                   
    </div> <!-- container -->
</body>
</html>
<?php require __DIR__ . '/../../../footer.php';?>