
<?php require __DIR__ . '/../../../header.php';?>


    <div class="container py-5">
    <?php require __DIR__ .'/../../php/message/message.php';?>
        <button type="button" class="btn btn-dark btn-lg">
                <i class="fas fa-arrow-circle-left"></i>
                <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
        </button>
        <div class="row mt-3">
            <div class="col-md-8">
            
                <form action="/TP2-Turismo/admin/php/controllers/Ciudad/addCiudad.controller.php" method="POST"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese un nombre">
                    </div>
                    <div class="form-group">
                        <label for="userfile">Imagen</label>
                        <input type="file" class="form-control" id="userfile" name="userfile" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div> <!-- col -->
        </div> <!-- row -->
    </div> <!-- container -->
<?php require __DIR__ . '/../../../footer.php';?>