<?php require __DIR__ . '/../../../header.php';?>
 
  <h1 class= "display-4 text-center mb-5"><?php echo $hotel->nombre;?></h1>

<div class="container">

    <button type="button" class="btn btn-dark btn-lg">
         <i class="fas fa-arrow-circle-left"></i>
        <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
    </button>
        <div class="row my-3">
                <div class="col-6 mx-auto">
                    <div class="card mb-5 animate__animated animate__bounceInRight">
                        <img class="card-img-top img-fluid" src="../../../../img/hoteles/<?php echo $hotel->imagen?>" alt="<?php echo $hotel->imagen?>">
                            <div class="card-body">
                                    <p class="card-text"><small class="text-muted"><?php echo $hotel->categoria?></small></p>
                                    <h3 class="card-title"><?php echo $hotel->nombre?></h3>
                                    <p class="card-text"><?php echo $hotel->direccion?></p>
                                    <p class="card-text text-justify"><?php echo $hotel->descripcion?></p>
                                    <!-- A futuro ... <a href="/TP2-Turismo/admin/php/controllers/Hotel/mostrarHabitaciones.controller.php?id_hotel=<?php // echo $hotel->id_hotel?>"> VER HABITACION </a> -->
                            </div>
                    </div><!-- card -->
                </div><!-- col -->
        </div><!-- row -->
</div><!-- container --> 


<?php require __DIR__ .'/../../../footer.php';?>



