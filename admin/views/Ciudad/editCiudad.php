
    <div class="container py-5">
    <?php require __DIR__ .'/../../php/message/message.php';?>
        <button type="button" class="btn btn-dark btn-lg">
             <i class="fas fa-arrow-circle-left"></i> 
            <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
        </button>
            <div class="row">
                <div class="col-md-8 mx-auto">
            
                    <form action="/TP2-Turismo/admin/php/controllers/Ciudad/updateCiudad.controller.php" method="POST"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $ciudad->nombre ?>">
                        </div>
                        <div class="form-group">
                            <label for="userfile">Imagen</label>
                                <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="userfile" name="userfile" aria-describedby="userfile">
                                            <label class="custom-file-label" for="userfile"><?php echo $ciudad->imagen;?></label>
                                        </div>
                                </div>
                        </div>
                        <img class="img-fluid my-2" width="300" height="auto" src="/TP2-Turismo/img/ciudades/<?php echo $ciudad->imagen ?>" alt="<?php echo $ciudad->imagen ?>">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <input type="hidden" name="id_ciudad" value="<?php echo $ciudad->id_ciudad; ?>">
                        <input type="hidden" name="imagen" value="<?php echo $ciudad->imagen; ?>">
                    </form>
                </div> <!-- col -->
            </div> <!-- row -->
    </div> <!-- container -->
    <?php require __DIR__ . '/../../../footer.php';?>
