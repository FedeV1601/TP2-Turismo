<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/TP2-Turismo/css/estilos.css">
    <title>Hotel</title>
</head>
<body>
    <div class="container py-3">
    <?php require __DIR__ .'/../../php/message/message.php';?>
        <div class="mx-auto">
            <button type="button" class="btn btn-dark btn-lg my-3">
                <i class="fas fa-arrow-circle-left"></i>
                <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
            </button>
        </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="/TP2-Turismo/admin/php/controllers/Hotel/updateHotel.controller.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $hotel->nombre ?>">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $hotel->direccion ?>">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                                <select class="form-control" name="categoria" id="categoria" placeholder="Ingrese la categoria">
                                    <?php foreach($categorias as $categoria):?>
                                        <?php if($categoria == $hotel->categoria):?>
                                            <option value="<?php echo $categoria?>" selected><?php echo $categoria ?></option>
                                        <?php else:  ?>
                                            <option value="<?php echo $categoria?>"><?php echo $categoria ?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="id_ciudad">Ciudad</label>
                                    <select class="form-control" id="id_ciudad" name="id_ciudad">
                                        <?php foreach($ciudades as $ciudad):?>
                                            <?php if($ciudad->id_ciudad == $hotel->id_ciudad):?>
                                                <option value="<?php echo $ciudad->id_ciudad ?>" selected><?php echo $ciudad->nombre ?></option>
                                            <?php else:  ?>
                                                <option value="<?php echo $ciudad->id_ciudad ?>"><?php echo $ciudad->nombre ?></option>
                                            <?php endif;?>
                                        <?php endforeach;?>
                                    </select>
                        </div>
                        <div class="form-group">
                            <label for="userfile">Imagen</label>
                                <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="userfile" name="userfile" value="<?php echo $hotel->imagen ?>" aria-describedby="userfile">
                                            <label class="custom-file-label" for="userfile"><?php echo $hotel->imagen ?></label>
                                        </div>
                                </div>
                            
                            <img class="img-fluid mt-2" width="300" height="auto" src="/TP2-Turismo/img/hoteles/<?php echo $hotel->imagen ?>" alt="<?php echo $hotel->imagen ?>">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="5"><?php echo $hotel->descripcion?></textarea> 
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <input type="hidden" name="id_hotel" value="<?php echo $hotel->id_hotel; ?>">
                        <input type="hidden" name="imagen" value="<?php echo $hotel->imagen; ?>">
                    </form> 
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

<?php require __DIR__ .'/../../../footer.php';?>