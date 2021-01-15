<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM Hoteles</title>
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
                        <div class="  col-4">
                            <a href="/TP2-Turismo/admin/php/controllers/Hotel/agregarHotel.controller.php" class="btn btn-secondary"><i class="fas fa-plus-circle"></i>  Agregar Hotel</span></a></td>
                        </div>
                        <div class=" col-4 text-center ">
                            <form action="ABMHotel.controller.php" method="GET">
                                <div class="input-group">
                                    <select class="custom-select" name="orden">
                                        <option value="asc" selected>Ordenar de forma Ascendente</option>
                                        <option value="desc">Ordenar de forma Descendente</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ordenar</button>
                                    </div>
                                </div>   
                            </form>
                         </div> <!-- col -->
                        <div class=" col-4 text-right">
                                <form class="form-inline my-2 my-lg-0 " method="GET" action="/TP2-Turismo/admin/php/controllers/Hotel/ABMHotel.controller.php">
                                    <div class="input-group"> 
                                        <input class="form-control mr-2" type="search" name="busqueda"  placeholder="Buscar" aria-label="Search">
                                        <input type="hidden" name="orden" value="asc"> 
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Buscar</button>
                                    </div>
                                </form>
                        </div><!-- col -->
                    </div><!-- row -->
                <table class="table table-bordered striped">
                    <thead>
                        <tr>
                            <td>Hotel</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach($hoteles as $hotel): ?>
                            <tr>
                                <td><?php echo $hotel->nombre; ?></td>
                                <td>
                                    <a href="/TP2-Turismo/admin/php/controllers/Hotel/editHotel.controller.php?id_hotel=<?php echo $hotel->id_hotel?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="/TP2-Turismo/admin/php/controllers/Hotel/deleteHotel.controller.php?id_hotel=<?php echo $hotel->id_hotel?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                       <?php endforeach; ?>
                    </tbody>
                </table>


                <!-- PAGINACION -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <?php for($i =1; $i<=$botones; $i++):?><li class="page-item"><a class="page-link" href="/TP2-Turismo/admin/php/controllers/Hotel/ABMHotel.controller.php?<?php if(isset($_GET['busqueda'])):?><?php echo 'busqueda='.$_GET['busqueda'].'&'; endif;?><?php if(isset($_GET['orden'])):?><?php echo 'orden='.$_GET['orden'].'&'; endif;?>pagina=<?php echo $i;?>"><?php echo $i;?></a></li>
                            <?php endfor;?>
                        </ul>
                    </nav>
                <!-- FIN PAGINACION -->


    </div><!-- container -->
<?php require __DIR__ .'/../../../footer.php';?>